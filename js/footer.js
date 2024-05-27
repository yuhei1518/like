document.addEventListener("DOMContentLoaded", function() {
    var loadDataBtn = document.getElementById("loadDataBtn");
    var closeDataBtn = document.getElementById("closeDataBtn");
    var tableBody = document.getElementById("footer-table-body");
  
    loadDataBtn.addEventListener("click", function() {
      var xhr = new XMLHttpRequest();
      xhr.open("GET", "info2.php", true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          var responseData = JSON.parse(xhr.responseText);
          var tableContent = "";
          responseData.forEach(function(row) {
            tableContent += "<tr>";
            tableContent += "<td>" + row['name'] + "</td>";
            tableContent += "<td>" + row['coment'] + "</td>";
            tableContent += "<td>" + row['anime'] + "</td>";
            tableContent += "</tr>";
          });
          tableBody.innerHTML = tableContent;
          loadDataBtn.style.display = "none"; // 表示ボタンを非表示にする
          closeDataBtn.style.display = "block"; // 閉じるボタンを表示する
        }
      };
      xhr.send();
    });
  
    closeDataBtn.addEventListener("click", function() {
      tableBody.innerHTML = ""; // テーブルの内容を空にする
      loadDataBtn.style.display = "block"; // 表示ボタンを表示する
      closeDataBtn.style.display = "none"; // 閉じるボタンを非表示にする
    });
  });
  