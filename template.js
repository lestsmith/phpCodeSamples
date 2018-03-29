function init()
{
	var row, table , i , car , clone , cells;

	row = document.getElementById("row");
	table = document.getElementById("table");


	clone = row.cloneNode(true);
	clone.id = "newID";
	//table.appendChild(clone);

	for (i = 0 ; i < data.length ; i++)
	{
		car = data[i];

		clone = row.cloneNode(true);
		clone.id = "newID";

		var row = document.createElement('tr');
		var tMake = document.createElement('td');
		var tModel = document.createElement('td');
		var tBHP = document.createElement('td');

		row.appendChild(tMake);
		row.appendChild(tModel);
		row.appendChild(tBHP);

		tMake.innerHTML = car.make;
		tModel.innerHTML = car.model;
		tBHP.innerHTML = car.bhp;

		table.appendChild(row);
	}
}
document.addEventListener("DOMContentLoaded", init, false);