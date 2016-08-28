/**
 * 
 */
function test(link, name, description) {

	countLink = 0;
	var searchPageContent = "";
	while (name[countLink] != null) {
		searchPageContent = searchPageContent + "<a href=\"" + link[countLink]
				+ "\"><h4 class=\"text-primary\">" + name[countLink]
				+ "</h4></a> <p>" + description[countLink] + "</p><hr />" + " ";
		countLink++;
	}

	document.getElementById('search_page_text').innerHTML = searchPageContent;

}
function searchDatabase() {
	window.open("./search.php", "_parent");
	return false;
}
