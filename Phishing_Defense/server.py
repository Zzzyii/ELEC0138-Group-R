from flask import Flask, request, jsonify
import whois
from Feature_Extractor import *
import pickle
import numpy as np
import pandas as pd
from tensorflow.keras.models import load_model
import os

app = Flask(__name__)

@app.route('/submit', methods=['POST'])
def submit_domain():
    # 确保请求中包含域名 Send request to the domain
    if not request.json or 'domain' not in request.json:
        return jsonify({"error": "Missing domain in request"}), 400
    
    domain = request.json['domain']
    
    # 将特征列表转换为dataframe Store them in these columns
    feature_columns = ['Have_IP', 'Have_At', 'URL_Length', 'URL_Depth','Redirection', 
                          'https_Domain', 'TinyURL', 'Prefix/Suffix', 'DNS_Record', 'Web_Traffic', 
                          'Domain_Age', 'Domain_End', 'iFrame', 'Mouse_Over','Right_Click', 'Web_Forwards']

    try:
        features = featureExtraction(domain)
    except Exception as e:
        return jsonify({"error": f"Feature extraction failed: {e}"}), 500

    df_features = pd.DataFrame([features], columns=feature_columns)

    # 导入预训练的二元分类模型 
    

    print(f"导入预训练的二元分类模型")

    #Insert pre-trained model
    try:
        current_path = os.getcwd()
        model_path = f'{current_path}\\binaryModel.keras'
        modelBinary = load_model(model_path)
        ## modelBinary = load_model(r'C:\Users\hfcao\Desktop\UCL-SP\SP\binaryModel.keras')
    except Exception as e:
        return jsonify({"error": f"Model loading failed: {e}"}), 500

    # 进行预测 Predict the input link
    try:
        predict_result = modelBinary.predict(df_features)
    except Exception as e:
        return jsonify({"error": f"Prediction failed: {e}"}), 500
    
    # 阈值处理，将概率输出转换为二元分类（合法/钓鱼） if Prediction higher than 0.5 is Phishing. Vice Versa.
    response_data = "Phishing" if predict_result[0] >= 0.5 else "Legitimate"

    print(f"return: {response_data}")

    return jsonify({"message": response_data})

@app.route('/status')
def status():
    return jsonify({"status": "ok"})


if __name__ == '__main__':
    app.run(debug=True, port=5000)
