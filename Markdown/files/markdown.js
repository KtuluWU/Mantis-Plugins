function getMarkdownGuide()
{
	return JSON.parse($("input[name=markdown_guide]").val());
}

$(document).ready(function(){
  $("textarea[name=additional_info], textarea[name=bugnote_text]").after(function(n){
  	  var markdownGuide = getMarkdownGuide();
      return "<strong><a href=\"" + markdownGuide.url + "\" name=\"markdownguide\" target=\"_blank\" >"+ 
      		 "<img src=\"" + markdownGuide.icon + "\" alt=\"png_file_icon\" width=\"16\" height=\"16\"" +  
      		 " title=\"" + markdownGuide.text + "\" ></a></strong>";
  });
});
