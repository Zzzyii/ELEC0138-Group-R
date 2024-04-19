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



# User Interface/browser extension
## Overview
The user interface for this project is in the form of browser extension, through this user interface, users can easily and quickly identify the status of the site.

![v3 - frame at 0m54s](https://github.com/Zzzyii/ELEC0138-Group-R/assets/85960806/f8cf0dcb-d14e-4652-bc18-b6f38cbe6b6e)

## Components
**The plug-in consists of the following files:**
> `manifest.json`
- _This is the extension's configuration file, defining the extension's name, version, permissions, icons, background script, content script, and so on._
> `background.js`
- _The extension's background script, which runs in the extension's background page. Used to listen for browser events (like tab updates, button clicks, etc.), maintain the extension's global state, and execute long-running tasks that don't require direct interaction with the user interface._
> `about.html`
- _A static HTML page used to display information related to the extension_
> `history.html`
> `history.js`
- _`history.html`: An HTML page used to display the user's browsing history and detection results interface._
- _`history.js`: The JavaScript file associated with the history.html page, used for processing logic such as retrieving data from chrome.storage and dynamically displaying it on the page._
> `popup.html`
> `popup.css`
> `popup.js`
- _`popup.html`: The HTML file for the extension's popup page, which is the user interface displayed when the user clicks the extension icon._
- _`popup.css`: The CSS file providing styles for the popup.html page._
- _`popup.js`: The JavaScript file handling user interaction logic on the popup.html page, such as button click event handling, sending messages to the background script, etc._
> `images`
- _A directory containing image files used by the extension, such as extension icons, images on pages, etc._
**The local machine learning detection section consists of the following files:**
> `server.py`
- _Responsible for receiving data to be analyzed, invoking the feature extraction and prediction logic, and sending back the analysis results._

## Installation
### Requirements
This project requires Google Chrome 122.0.6261.129 or higher. 
### Setup
1. Type "Chrome://extensions/" into your Google Chrome address bar to access the Chrome extensions management interface
2. Enable "developer mode" in the upper right corner
3. Click "load unpacked" to find the downloaded and unzipped "Chrome-extension" file and upload the folder
4. Make sure the `server.py` is running locally

## Usage
To use this project:
When you open the extension, go to the URL you want to visit, the URL will be automatically passed into the local model for analysis, if the analysis results for phishing sites, pop-up notification.

![v3 - frame at 1m12s](https://github.com/Zzzyii/ELEC0138-Group-R/assets/85960806/ec18cbd1-11e1-4de3-be7b-ffa0d47c2288)

Click on the home screen plug-in, you will be able to see the status of the current visit to the site, and can view and clearly detect the history.
![v3 - frame at 0m54s](https://github.com/Zzzyii/ELEC0138-Group-R/assets/85960806/550c2f4c-f43b-4d9e-a7da-5f4abbb505c3)![v3 - frame at 1m20s](https://github.com/Zzzyii/ELEC0138-Group-R/assets/85960806/e4e7a348-11e5-42ae-bf9e-6aafb0c75ce1)

# SQL Injection
## Overview
In the face of rising cyber threats, especially SQL injection attacks, it has become critical to ensure the security and integrity of data. SQL injection is a common at-tack technique where attackers manipulate database operations by injecting malicious SQL commands. To deal with this situation, we have designed and implemented an efficient defence system that maintains operational security by using prepared statements to protect database interactions from SQL injection attacks.
## File：
SQL_Attack: This file contains codes for sql injection attack.
SQL_Defense: This file contains codes for sql injection defense.
## Usage
To use this project:
1. Start by  downloading the files.
2. Use the file SQL_Attack to set up a server and mysql, then enter SQL injection statements in the input field, you will find you can successfully inject .
3. Use the file SQL_Defense to set up a server and mysql, then enter SQL injection statements in the input field, you will find you fail to inject.
