function angleFromCoordinates(){

    var x_l = document.getElementById('coord-XL').value;
    var y_l = document.getElementById('coord-YL').value;
    var x_p = document.getElementById('coord-XP').value;
    var y_p = document.getElementById('coord-YP').value;
    var x_c = document.getElementById('coord-XC').value;
    var y_c = document.getElementById('coord-YC').value;

    var deltaXL = x_l - x_c; //   |deltaXL  deltaYL|
    var deltaYL = y_l - y_c; //   |deltaXP  deltaYP|
    var deltaXP = x_p - x_c; //                     0
    var deltaYP = y_p - y_c;

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
        if(correct && x_l && y_l && x_p && y_p && x_c && y_c) $('#result').html('Kąt = '+result.toFixed(4)+'<span style="text-transform:none"><sup>g</sup></span>');
        else $('#result').html('BŁĄD!');
    }

}