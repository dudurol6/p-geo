function polar(){

    var X_st = Number(document.getElementById('coord-Xstation').value);
    var Y_st = Number(document.getElementById('coord-Ystation').value);
    var X_ref = Number(document.getElementById('coord-Xreference').value);
    var Y_ref = Number(document.getElementById('coord-Yreference').value);
    var distance = Number(document.getElementById('distance').value);
    var refDir = Number(document.getElementById('reference-direction').value);
    var pointDir = Number(document.getElementById('point-direction').value);

    var deltaX = X_ref - X_st;
    var deltaY = Y_ref - Y_st;

    var correct = true;
    var referenceAzimuth = 500;

    if(deltaX > 0 && deltaY > 0) referenceAzimuth = Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI;            // Q1
    else if(deltaX < 0 && deltaY > 0) referenceAzimuth = 200 - Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI; // Q2
    else if(deltaX < 0 && deltaY < 0) referenceAzimuth = 200 + Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI; // Q3
    else if(deltaX > 0 && deltaY < 0) referenceAzimuth = 400 - Math.atan(Math.abs(deltaY / deltaX)) * 200 / Math.PI; // Q4
    else if(deltaX == 0 && deltaY == 0){referenceAzimuth = 'Punkty w tym samym miejscu';correct = false;}  // lack of cord diff
    else if(deltaX == 0 && deltaY > 0) referenceAzimuth = 100; // exactly 100.0000
    else if(deltaX < 0 && deltaY == 0) referenceAzimuth = 200; // exactly 200.0000
    else if(deltaX == 0 && deltaY < 0) referenceAzimuth = 300; // exactly 300.0000
    else if(deltaX > 0 && deltaY == 0) referenceAzimuth = 400; // exactly 400.0000 / 0.0000

    if(correct){
        var angle = pointDir - refDir;
        var pointAzimuth = referenceAzimuth + angle;

        var resultX = X_st + distance * Math.cos(pointAzimuth * Math.PI / 200);
        var resultY = Y_st + distance * Math.sin(pointAzimuth * Math.PI / 200);

        $('#result').css('display', 'block');
        $('#result').html('X<sub>P</sub> = '+resultX.toFixed(2)+'  Y<sub>P</sub> = '+resultY.toFixed(2)+'');

        var toHistory = ' X:'+resultX.toFixed(2)+'  Y:'+resultY.toFixed(2)+'';
        localStorage.setItem('polarHistory'+whatsNewValueForHistory('polarHistory')+'', toHistory);
        returnHistory('polarHistory');
    }
    else{
        $('#result').css('display', 'block');
        $('#result').html('BŁĄD!');
    }
}