<html>
  <head>
    <title>JSON Custom Search API Example</title>
    <script>
      function element(text)
      {
         var newDiv = document.createElement("div");
         var newContent = document.createTextNode(text);
        return newDiv.appendChild(newContent);   
      }
      function hndlr(response) {
           console.log(response);
           var item = response.items[0];
       for (var i = 0; i < response.items.length; i++) {
         let div = document.getElementById("div1");
        var item = response.items[i];
       let ht = element(item.title)
       let it = element(item.kind); 
    // var currentDiv = 
   document.body.insertBefore(ht, div); 
   document.body.insertBefore(it, div);
  //       document.getElementById("content").innerHTML += "<br>" + (item.htmlTitle);
  //       document.getElementById("title").innerHTML += "<br>" + (item.title);
      }
    }
  </script>
  <script src="https://www.googleapis.com/customsearch/v1?key=AIzaSyAPxndaiuf_Ou9EmUNjtM_MSmemrLfhM7M&cx=017576662512468239146:omuauf_lfve&q=cars&callback=hndlr">
  </script>
  </head>
   <body>
    <section id="div1">kfhgkljkgf
    </section> 
    
  </body>
</html>