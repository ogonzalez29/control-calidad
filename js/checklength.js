//Función para el primer campo de comentarios
function check_length_1(testform)
{
maxLen = 300; // max number of characters allowed
if (testform.comment1.value.length >= maxLen) {
// Alert message if maximum limit is reached. 
// If required Alert can be removed. 
var msg = "Haz alcanzado el máximo de caracteres permitido";
alert(msg);
// Reached the Maximum length so trim the textarea
	testform.comment1.value = testform.comment1.value.substring(0, maxLen);
 }
else{ // Maximum length not reached so update the value of comment2 counter
	testform.text_num_1.value = maxLen - testform.comment1.value.length;
}
}

//Función para el segundo campo de comentarios
function check_length_2(testform)
{
maxLen = 300; // max number of characters allowed
if (testform.comment2.value.length >= maxLen) {
// Alert message if maximum limit is reached. 
// If required Alert can be removed. 
var msg = "Haz alcanzado el máximo de caracteres permitido";
alert(msg);
// Reached the Maximum length so trim the textarea
	testform.comment2.value = testform.comment2.value.substring(0, maxLen);
 }
else{ // Maximum length not reached so update the value of comment2 counter
	testform.text_num_2.value = maxLen - testform.comment2.value.length;
}
}

//Función para el tercer campo de comentarios
function check_length_3(testform)
{
maxLen = 300; // max number of characters allowed
if (testform.comment3.value.length >= maxLen) {
// Alert message if maximum limit is reached. 
// If required Alert can be removed. 
var msg = "Haz alcanzado el máximo de caracteres permitido";
alert(msg);
// Reached the Maximum length so trim the textarea
	testform.comment3.value = testform.comment3.value.substring(0, maxLen);
 }
else{ // Maximum length not reached so update the value of comment2 counter
	testform.text_num_3.value = maxLen - testform.comment3.value.length;
}
}

//Función para el cuarto campo de comentarios
function check_length_4(testform)
{
maxLen = 300; // max number of characters allowed
if (testform.comment4.value.length >= maxLen) {
// Alert message if maximum limit is reached. 
// If required Alert can be removed. 
var msg = "Haz alcanzado el máximo de caracteres permitido";
alert(msg);
// Reached the Maximum length so trim the textarea
	testform.comment4.value = testform.comment4.value.substring(0, maxLen);
 }
else{ // Maximum length not reached so update the value of comment2 counter
	testform.text_num_4.value = maxLen - testform.comment4.value.length;
}
}



