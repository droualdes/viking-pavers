var pavings = [
  {name:'Cobblestone', value: '9.5', img: 'images/photo1a.jpg'}, 
  {name:'Belgian Cobblestone', value: '12', img: 'images/photo2a.jpg'},
  {name:'Slatestone', value: '14', img: 'images/photo3a.jpg'}
];

var paving_index = 0;
var estimate = 0;

function moveLeft()
{
  if(paving_index == 0) { paving_index = pavings.length-1; }
  else { paving_index -= 1; }
  setPaving(pavings[paving_index]);
}

function moveRight()
{
  if(paving_index == pavings.length-1) { paving_index = 0; }
  else { paving_index += 1; }
  setPaving(pavings[paving_index]);
}

function setPaving(paving)
{
  $("#paver-image").css("background-image", "url(" + paving.img + ")");  
  $("#paver-text").html(paving.name);
  $("input#paving-type").attr('value',paving.name);
  refreshEstimate();
}

function squareFeet()
{
  return $("input#square_feet").attr('value');
}

function refreshEstimate()
{
  estimate = parseFloat(squareFeet()) * parseFloat(pavings[paving_index].value);
  estimate = Math.ceil(estimate);
  estimate = addCommas(estimate);
  $("strong#cost").html("$" + estimate);
  $("input#paving-cost").attr('value', "$" + estimate);
}

function formatCurrency(amount)
{
	var i = parseFloat(amount);
	if(isNaN(i)) {	 i = 0.00; }
	var minus = '';
	if(i < 0) { minus = '-'; }
	i = Math.abs(i);
	i = parseInt((i + .005) * 100);
	i = i / 100;
	s = new String(i);
	if(s.indexOf('.') < 0) { s += '.00'; }
	if(s.indexOf('.') == (s.length - 2)) { s += '0'; }
	s = minus + s;
	return s;
}

function addCommas(nStr)
{
	nStr += '';
	x = nStr.split('.');
	x1 = x[0];
	x2 = x.length > 1 ? '.' + x[1] : '';
	var rgx = /(\d+)(\d{3})/;
	while (rgx.test(x1)) {
		x1 = x1.replace(rgx, '$1' + ',' + '$2');
	}
	return x1 + x2;
}

window.onload = function()
{
  setPaving(pavings[0]);
  paving_index = 0;
  
  $("a.arrow-left").click(function() { moveLeft(); });
  $("a.arrow-right").click(function() { moveRight(); });
  $("a#calculator_link").click(function() { $("div.calculator_form").modal(); });
  
  $("input#square_feet").click(function() { $("input#square_feet").select(); });
  
  $("input#name").click(function() { $("input#name").select(); });
  $("input#phone").click(function() { $("input#phone").select(); });
  $("input#email").click(function() { $("input#email").select(); });
  
  $("input#square_feet").keyup(function() { refreshEstimate(); });
  $("input#square_feet").attr("value", "0");
  refreshEstimate();
}
  
