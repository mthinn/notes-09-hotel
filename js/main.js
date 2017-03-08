function validation() {
	var firstName = document.forms['hotelForm']['firstname'].value;
  var lastName = document.forms['hotelForm']['lastname'].value;


if (firstName == null || firstName == '' || lastName == null || lastName ''){
	document.queryselector('.notify'). textcontent = 'don\'t forget to fill in the required fields!';
	return false;

}
}