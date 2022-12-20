function azimuth(){

    var x_1 = Number(document.getElementById('coord-X1').value);
    var y_1 = Number(document.getElementById('coord-Y1').value);
    var x_2 = Number(document.getElementById('coord-X2').value);
    var y_2 = Number(document.getElementById('coord-Y2').value);

    var deltaX = x_2 - x_1;
    var deltaY = y_2 - y_1;
    var correct = true;
    var result = 500;

    if(deltaX > 0 && deltaY > 0) result = Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI;            // Q1
    else if(deltaX < 0 && deltaY > 0) result = 200 - Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI; // Q2
    else if(deltaX < 0 && deltaY < 0) result = 200 + Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI; // Q3
    else if(deltaX > 0 && deltaY < 0) result = 400 - Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI; // Q4
    else if(deltaX == 0 && deltaY == 0){result = 'Punkty w tym samym miejscu';correct = false;}  // lack of cord diff
    else if(deltaX == 0 && deltaY > 0) result = 100; // exactly 100.0000
    else if(deltaX < 0 && deltaY == 0) result = 200; // exactly 200.0000
    else if(deltaX == 0 && deltaY < 0) result = 300; // exactly 300.0000
    else if(deltaX > 0 && deltaY == 0) result = 400; // exactly 400.0000 / 0.0000

    if(result > 400){
        $('#result').css('display', 'block');
        $('#result').html('BŁĄD!');
    }
    else if(x_1 && y_1 && x_2 && y_2){
        $('#result').css('display', 'block');
        if(correct) $('#result').html('Azymut = '+result.toFixed(4)+'<span style="text-transform:none"><sup>g</sup></span>');
        else $('#result').html('BŁĄD!');
    }

}