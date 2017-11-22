	function plus(){
	   var jewelry = document.frmAccounting.jewelry.value;
	   var leather = document.frmAccounting.leather.value;
	   var snake_park = document.frmAccounting.snake_park.value;
	   var rubber = document.frmAccounting.rubber.value;
	   var red88 = document.frmAccounting.red88.value;
	   var gm = document.frmAccounting.gm.value;
	   var silk = document.frmAccounting.silk.value;
	   var person = document.frmAccounting.re_shopping_personqty.value;
	   var overall = document.frmAccounting.overall.value;
	   var watprachum = document.frmAccounting.watprachum.value;
	   var watnongket = document.frmAccounting.watnongket.value;
	   var overall_average = document.frmAccounting.overall_average.value;
	   		if(jewelry == "" || leather == "" || snake_park == "" || rubber == "" || red88 == "" || gm == "" || silk == "" || watprachum == "" || watnongket == ""){
	   			
	   			return false;
	   		}

	   var sum = 0;
	   var sum1 = 0;
	   var sum2 = 0;
	   var sum3 = 0;
	   var sum4 = 0;
	   var sum5 = 0;
	   var sum6 = 0;
	   var sum7 = 0;
	   var sum8 = 0;
	   var sum9 = 0;
	   var sum10 = 0;
	   sum = Number(jewelry) + Number(leather) + Number(snake_park) + Number(rubber) + Number(red88) + Number(gm) + Number(silk);
	    frmAccounting.overall.value = sum;

	   sum1 = Number(jewelry) / Number(person);
	   	frmAccounting.jewelry_average.value = Math.round(sum1);

	   sum2 = Number(leather) / Number(person);
	   	frmAccounting.leather_average.value = Math.round(sum2);	

	   sum3 = Number(snake_park) / Number(person);
	   	frmAccounting.snake_average.value = Math.round(sum3);

	   sum4 = Number(rubber) / Number(person);
	   	frmAccounting.rubber_average.value = Math.round(sum4);

	   sum5 = Number(red88) / Number(person);
	   	frmAccounting.red88_average.value = Math.round(sum5);

	   sum6 = Number(gm) / Number(person);
	   	frmAccounting.gm_average.value = Math.round(sum6);

	   sum7 = Number(silk) / Number(person);
	   	frmAccounting.silk_average.value = Math.round(sum7);

	   sum8 = Number(watprachum) / Number(person);
	   	frmAccounting.watprachum_average.value = Math.round(sum8);

	   sum9 = Number(watnongket) / Number(person);
	   	frmAccounting.watnongket_average.value = Math.round(sum9);

	   sum10 = Number(overall) / Number(person);
	   	frmAccounting.overall_average.value = Math.round(sum10);
	}