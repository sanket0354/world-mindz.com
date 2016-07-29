/**
 * 
 */

function get_link(obj) {
	
	/** gets the inner html of the obj passed to the function */
	var link = obj.innerHTML;
    
	/** Splits the string from space and stores in array*/
	var split_string = link.split(" ");

	var count_array = 0, link_string = "";
	
	while (split_string[count_array]) {

		if (count_array == 0) {
			link_string = link_string + split_string[count_array];

		} else {
			link_string = link_string + "_" + split_string[count_array];
		}
		count_array++;
	}
	link_string = link_string.toLowerCase();
	window.location.href = "http://mind-worldz.com/main/html/" + link_string
			+ "/article.php";

}