  var theTable3 = document.getElementById("table3");
      var totalPage3 = document.getElementById("spanTotalPage3");
      var pageNum3= document.getElementById("spanPageNum3");
      var spanPre3 = document.getElementById("spanPre3");
      var spanNext3 = document.getElementById("spanNext3");
      var spanFirst3 = document.getElementById("spanFirst3");
      var spanLast3 = document.getElementById("spanLast3");
      var numberRowsInTable3 = theTable3.rows.length;
      var pageSize3 = 15;  //每一页显示的条数
      var page3 = 1;
      //下一页
      function next3() {
          hideTable3();
          currentRow3 = pageSize3 * page3;
          maxRow3 = currentRow3 + pageSize3;
          if (maxRow3 > numberRowsInTable3) maxRow3 = numberRowsInTable3;
          for (var i = currentRow3; i < maxRow3; i++) {
              theTable3.rows[i].style.display = '';
          }
          page3++;
          if (maxRow3 == numberRowsInTable3) { nextText3(); lastText3(); }
          showPage3();
          preLink3();
          firstLink3();
      }
      //上一页
      function pre3() {
          hideTable3();
          page3--;
          currentRow3 = pageSize3 * page3;
          maxRow3 = currentRow3 - pageSize3;
          if (currentRow3 > numberRowsInTable3) currentRow3 = numberRowsInTable3;
          for (var i = maxRow3; i < currentRow3; i++) {
              theTable3.rows[i].style.display = '';
          }
          if (maxRow3 == 0) { preText3(); firstText3(); }
          showPage3();
          nextLink3();
          lastLink3();
      }
      //第一页
      function first3() {
          hideTable3();
          page3 = 1;
          for (var i = 0; i < pageSize3; i++) {
              theTable3.rows[i].style.display = '';
          }
          showPage3();
          preText3();
          nextLink3();
          lastLink3();
      }
      //最后一页
      function last3() {
          hideTable3();
          page3 = pageCount3();
          currentRow3 = pageSize3 * (page3 - 1);
          for (var i = currentRow3; i < numberRowsInTable3; i++) {
              theTable3.rows[i].style.display = '';
          }
          showPage3();
          preLink3();
          nextText3();
          firstLink3();
      }
      function hideTable3() {
          for (var i = 0; i < numberRowsInTable3; i++) {
              theTable3.rows[i].style.display = 'none';
          }
      }
      function showPage3() {
          pageNum3.innerHTML = page3;
      }
      //总共页数
      function pageCount3() {
          var count3 = 0;
          if (numberRowsInTable3 % pageSize3 != 0) count3 = 1;
          return parseInt(numberRowsInTable3 / pageSize3) + count3;
      }
      //显示链接
      function preLink3() { spanPre3.innerHTML = "<a href='javascript:pre3();' class='page_change_js'>上一页</a>"; }
      function preText3() { spanPre3.innerHTML = "上一页"; }
      function nextLink3() { spanNext3.innerHTML = "<a href='javascript:next3();' class='page_change_js'>下一页</a>"; }
      function nextText3() { spanNext3.innerHTML = "下一页"; }
      function firstLink3() { spanFirst3.innerHTML = "<a href='javascript:first3();' class='page_change_js'>第一页</a>"; }
      function firstText3() { spanFirst3.innerHTML = "第一页"; }
      function lastLink3() { spanLast3.innerHTML = "<a href='javascript:last3();' class='page_change_js'>最后一页</a>"; }
      function lastText3() { spanLast3.innerHTML = "最后一页"; }
      //隐藏表格
      function hide3() {
          for (var i = pageSize3; i < numberRowsInTable3; i++) {
              theTable3.rows[i].style.display = 'none';
          }
          totalPage3.innerHTML = pageCount3();
          pageNum3.innerHTML = '1';
          nextLink3();
          lastLink3();
      }
      hide3();