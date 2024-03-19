# ELEC0138-Group-R

# Phishing Detector

## Overview
This project is designed to detect phishing attempts by analyzing URLs. It uses feature extraction and machine learning models to identify potential phishing sites effectively. The system includes scripts for extracting features from URLs, notebooks for training the detection model, and a server setup for deploying the model in real-time scenarios.

## Components
- `Feature_Extractor.py`: This script extracts features from URLs for analysis.
- `URL_Feature_Extraction.ipynb`: A Jupyter notebook that outlines the feature extraction process, including how to gather and prepare data for the model.
- `TrainPhishingDetector.ipynb`: A Jupyter notebook used for training the machine learning model to detect phishing attempts.
- `server.py`: Implements a server for real-time phishing detection, utilizing the trained model.
- `main_Test.ipynb`: A notebook for testing the overall functionality of the system, ensuring that each component works as expected.

## Installation

### Requirements
This project requires Python 3.8 or higher. The specific Python packages required are listed in `requirements.txt` and `environment.yml`, including:
- pandas
- keras
- tensorflow
- BeautifulSoup4
- whois
- scikit-learn
- ta

### Setup
1. Clone the repository to your local machine.
2. To install the required Python packages, you can use either:
   - `pip install -r requirements.txt` for a basic setup.
   - For a more comprehensive environment setup, especially if you're using conda, you can use `conda env create -f environment.yml` to create an environment with all dependencies.
3. Ensure you have Jupyter Notebook or JupyterLab installed to run the `.ipynb` files.

## Usage
To use this project:
1. Start by running `Feature_Extractor.py` to extract features from your dataset of URLs.
2. Use the `URL_Feature_Extraction.ipynb` notebook for detailed steps on feature extraction and preparation.
3. Train the model with `TrainPhishingDetector.ipynb`, which will guide you through the process.
4. Deploy the model using `server.py` for real-time detection.
5. `main_Test.ipynb` can be used to test the overall system and ensure it's working correctly.