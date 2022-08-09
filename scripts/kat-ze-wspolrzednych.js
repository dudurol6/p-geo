function angleFromCoordinates(){

    var coord_XL = document.getElementById('coord-XL').value;
    var coord_YL = document.getElementById('coord-YL').value;
    var coord_XP = document.getElementById('coord-XP').value;
    var coord_YP = document.getElementById('coord-YP').value;
    var coord_XC = document.getElementById('coord-XC').value;
    var coord_YC = document.getElementById('coord-YC').value;

    var deltaXL = coord_XL - coord_XC; //   |deltaXL  deltaYL|
    var deltaYL = coord_YL - coord_YC; //   |deltaXP  deltaYP|
    var deltaXP = coord_XP - coord_XC; //                     0
    var deltaYP = coord_YP - coord_YC;

    var hausbrandtForm_1 = deltaXL * deltaYP - deltaYL * deltaXP;
    var hausbrandtForm_2 = deltaXL * deltaXP + deltaYL * deltaYP;

    var deltaY = hausbrandtForm_1;
    var deltaX = hausbrandtForm_2;
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
        if(correct) $('#result').html('Kąt = '+result.toFixed(4)+'<span style="text-transform:none"><sup>g</sup></span>');
        else $('#result').html('PUNKTY W TYM SAMYM MIEJSCU albo BRAK WARTOŚCI');
    }

}