chrome.tabs.onUpdated.addListener(function(tabId, changeInfo, tab) {
  if (changeInfo.url) {
    console.log("Visited: " + changeInfo.url);
    
    // 构造请求发送到Python服务器
    fetch('http://localhost:8000', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({domain: changeInfo.url}),
    })
    .then(response => console.log("Data sent successfully"))
    .catch(error => console.error("Error sending data:", error));
  }
});
