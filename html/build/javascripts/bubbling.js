$( function(){
  $("#grandchildren,#children,#parent").click(
      function(event){
        $(this).css("background-color","red");
        $("div",this).first().text("I, (or a children) was clicked");
      }
  );
});
