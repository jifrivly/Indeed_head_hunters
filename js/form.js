var n = 1, m = 1, o = 1, p = 1,q = 1,r = 1;

function toggling(divid,addid) {
    $(divid).toggle();
    $(addid).toggle();    
};

function addDiploma() {
    var diploma = document.getElementById('diploma');

    if (q<5) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<div class="row" ><div class="input-field col l6 s12">' + 
        '<label for="diplomasubject' + (q+1) + '">Subject : </label>' + 
        '<input type="text" name="Diploma_Subject' + (q+1) + '" id="diplomasubject' + (q+1) + '"></div>' + 
        '<div class="input-field col l6 s12">' + 
        '<label for="diplomauniversity' + (q+1) + '">University : </label>' + 
        '<input type="text" name="Diploma_University' + (q+1) + '" id="uguniversity' + (q+1) + '"></div></div>' + 
        '<div class="row" ><div class="input-field col l6 s12">' + 
        '<label for="diplomamark' + (q+1) + '">MARK (in percentage) : </label>' + 
        '<input type="number" name="Diploma_Mark' + (q+1) + '" id="diplomamark' + (q+1) + '"></div></div>';

        diploma.appendChild(newDiv);

        q++;
    } else {
        alert('Limit exceeded');        
    }
}

function addDegree() {
    var degree =  document.getElementById('ug');
    if (m<5) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<div class="row"><div class="input-field col l6 s12">' + 
        '<label for="ugsubject' + (m+1) + '">Subject : </label>' + 
        '<input type="text" name="UG_Subject' + (m+1) + '" id="ugsubject' + (m+1) + '"></div>' + 
        '<div class="input-field col l6 s12">' + 
        '<label for="uguniversity' + (m+1) + '">University : </label>' + 
        '<input type="text" name="UG_University' + (m+1) + '" id="uguniversity' + (m+1) +'"></div></div>' + 
        '<div class="row"><div class="input-field col l6 s12">' + 
        '<label for="ugmark' + (m+1) + '">MARK (in percentage) : </label>' + 
        '<input type="number" name="UG_Mark' + (m+1) + '" id="ugmark' + (m+1) + '"></div></div>';

         degree.appendChild(newDiv);

         m++;
    } else {
        alert('Limit exceeded');
    }
};

function addPg() {
    var pg = document.getElementById('pg');

    if (n<5) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<div class="row">' + '<div class="input-field col l6 s12">' + 
        '<label for="pgsubject' + (n+1) + '">Subject : </label>' + 
        '<input type="text" name="PG_Subject'+ (n+1) + '" id="pgsubject' + (n+1) + '"></div>' + 
        '<div class="input-field col l6 s12">' + 
        '<label for="pguniversity' + (n+1) + '">University : </label>' + 
        '<input type="text" name="PG_University' + (n+1) + '" id="pguniversity' + (n+1) + '"></div></div>' + 
        '<div class="row"><div class="input-field col l6 s12">' + 
        '<label for="pgmark' + (n+1) + '">MARK (in percentage) : </label>' + 
        '<input type="number" name="PG_Mark' + (n+1) + '" id="pgmark' + (n+1) + '"></div></div>';

        pg.appendChild(newDiv);

        n++;
    } else {
        alert('Limit exceeded');
    }
};


function addMphil() {
    var mphill = document.getElementById('mphil');

    if (o<5) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<div class="row"><div class="input-field col l6 s12">' + 
        '<label for="mphilsubject' + (o+1) + '">Subject : </label>' + 
        '<input type="text" name="MPhil_Subject' + (o+1) + '" id="mphilsubject' + (o+1) + '"></div>' + 
        '<div class="input-field col l6 s12">' + 
        '<label for="mphiluniversity' +  (o+1) + '">University : </label>' + 
        '<input type="text" name="MPhil_University' + (o+1) + '" id="mphiluniversity' + (o+1) + '">' + '</div></div>' + 
        '<div class="row"><div class="input-field col l6 s12">' + 
        '<label for="mphilmark' + (o+1) +  '">MARK (in percentage) : </label>' + 
        '<input type="number" name="MPhil_Mark' + (o+1) + '" id="mphilmark' + (o+1) + '"></div></div>';

        mphill.appendChild(newDiv);

        o++;
    } else {
        alert('Limit exceeded');
    }
};



function addphd() {
    var phd = document.getElementById('phd');

    if (p<5) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<div class="row"><div class="input-field col l6 s12">' + 
        '<label for="doctoratesubject ' + (p+1) + '">Subject : </label>' + 
        '<input type="text" name="Doctorate_Subject' + (p+1) + '" id="doctoratesubject' + (p+1) + '"></div>' + 
        '<div class="input-field col l6 s12">' + 
        '<label for="doctorateuniversity' + (p+1) + '">University : </label>' + 
        '<input type="text" name="Doctorate_University' + (p+1) + '" id="doctorateuniversity' + (p+1) + '"></div></div>';

        phd.appendChild(newDiv);

        p++;
    } else {
        alert('Limit exceeded');
    }
};

function addCourses() {
    var course = document.getElementById('other');

    if (r<5) {
        var newDiv = document.createElement('div');
        newDiv.innerHTML = '<div class="row"><div class="input-field col l6 s12">' + 
        '<label for="othercourses' + (r+1) + '">Cource Subject : </label>' + 
        '<input type="text" name="Other_Courses' + (r+1) + '" id="othercourses' + (r+1) + '">' + 
        '</div>        </div>';

        course.appendChild(newDiv);

        r++;
    } else {
        alert('Limit Exceeded');
    }
};

