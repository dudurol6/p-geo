function azimuth(){

    var coord_x1 = document.getElementById('coord-X1').value;
    var coord_y1 = document.getElementById('coord-Y1').value;
    var coord_x2 = document.getElementById('coord-X2').value;
    var coord_y2 = document.getElementById('coord-Y2').value;

    var deltaX = coord_x2 - coord_x1;
    var deltaY = coord_y2 - coord_y1;
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
    else{
        $('#result').css('display', 'block');
        if(correct) $('#result').html('Azymut = '+result.toFixed(4)+'<span style="text-transform:none"><sup>g</sup></span>');
        else $('#result').html('PUNKTY W TYM SAMYM MIEJSCU albo BRAK WARTOŚCI');
    }

}