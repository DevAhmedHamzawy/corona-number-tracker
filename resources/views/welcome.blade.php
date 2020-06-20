<!DOCTYPE html>
<html lang="en" >

<head>
<meta charset="UTF-8">
<title>Corona Numbers Tracker</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css'>
<link rel="stylesheet" href="{{ url('css/style.css') }}">

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<section class="pt-5 pb-5 mt-0 align-items-center d-flex bg-dark" style="height:100vh; background-size: cover; background-image: url(https://images.pexels.com/photos/3936358/pexels-photo-3936358.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);">
  
        <div class="container-fluid">
           <div class="row  justify-content-center align-items-center d-flex text-center h-100">
             <div class="col-12 col-md-8  h-50 ">
                 <h1 class="display-2  text-light mb-2 mt-5"><strong>Corona Numbers Tracker</strong> </h1>
                 <h2 class="text-light mb-5">Auto Updated Corona Number Stratistics</h2>
                         
                         <div class="btn-container-wrapper p-relative d-block  zindex-1">
                             <a class="btn btn-link btn-lg   mt-md-3 mb-4 scroll align-self-center text-light" href="http://bootstraptor.com">
                                 <i class="fa fa-angle-down fa-4x text-light"></i>
                                 </a>   
                         </div>   
             </div>
              
           </div>
         </div>
</section>     


<div class="sectiontitle">
    <h2>Global Numbers</h2>
    <span class="headerLine"></span>
</div>


<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap ">
        </div>
    </div>
</div>






      <div class="col-md-12 col-xs-12" style="margin-left: -1%;">
        <nav>
          <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">USA</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Continents</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Countries</a>
            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Historical</a>
          </div>
        </nav>
        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="sectiontitle">
                <h2>United States Of America Number Cases</h2>
                <span class="headerLine"></span>
            </div>


            <table id="usa" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>State</th>
                        <th>Cases</th>
                        <th>Today Cases</th>
                        <th>Deaths</th>
                        <th>Today Deaths</th>
                        <th>Active</th>
                        <th>Tests</th>
                    </tr>
                </thead>
            </table>


            
          </div>
          <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">

            <div class="sectiontitle">
                <h2>Continents Number Cases</h2>
                <span class="headerLine"></span>
            </div>

            <table id="continents" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Continent</th>
                        <th>Cases</th>
                        <th>Today Cases</th>
                        <th>Deaths</th>
                        <th>Today Deaths</th>
                        <th>Recovered</th>
                        <th>Today Recovered</th>
                        <th>Active</th>
                        <th>Critical</th>
                        <th>Tests</th>
                    </tr>
                </thead>
            </table>

          </div>
          <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
           
            <div class="col-md-12 sectiontitle">
                <h2>Countries Number Cases</h2>
                <span class="headerLine"></span>
            </div>

            <table id="countries" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th></th>
                        <th>country</th>
                        <th>Cases</th>
                        <th>Today Cases</th>
                        <th>Deaths</th>
                        <th>Today Deaths</th>
                        <th>Recovered</th>
                        <th>Today Recovered</th>
                        <th>Active</th>
                        <th>Critical</th>
                        <th>Tests</th>
                    </tr>
                </thead>
            </table>

          </div>
          <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">

            <div class="col-md-12 sectiontitle">
                <h2>Global Historical Number Cases</h2>
                <span class="headerLine"></span>
            </div>
            
            <div class="col-md-12" style="height: 500px; overflow-y:scroll;">
                <table class="table" id="historical">
                    <thead>
                      <tr>
                        <th scope="col" class="w-50">Date</th>
                        <th scope="col" class="w-50">Cases</th>
                      </tr>
                    </thead>
                    <tbody id="historicaldataCases">
                    </tbody>
                </table>    
            </div>
            <br>
            <div class="col-md-12" style="height: 500px; overflow-y:scroll">
                <table class="table" id="historical">
                    <thead>
                      <tr>
                        <th scope="col" class="w-50">Date</th>
                        <th scope="col" class="w-50">Deaths</th>
                      </tr>
                    </thead>
                    <tbody id="historicaldataDeaths">
                    </tbody>
                </table>
            </div>
           <br>
            <div class="col-md-12" style="height: 500px; overflow-y:scroll">
                <table class="table" id="historical">
                    <thead>
                      <tr>
                        <th scope="col" class="w-50">Date</th>
                        <th scope="col" class="w-50">Recovered</th>
                      </tr>
                    </thead>
                    <tbody id="historicaldataRecovered">
                    </tbody>
                </table>
            </div>

          </div>
        </div>
      
    </div>
    




<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>

<script>

    axios.get('/all/0/0')
    .then((res) => { 
        for (const data in res.data) {
            if(res.data[data] !== 0 && data !== 'updated' && data !== 'population'){
                $('.projectFactsWrap').append('<div class="item wow fadeInUpBig animated animated" style="visibility: visible;"><i class="fa fa-briefcase"></i><p id="number1" class="number">'+res.data[data]+'</p><span></span><p>'+data+'</p></div>')
            }
        }
    });


    axios.get('/states/0/0')
    .then((res) => { 
        bindtoDatatable(res.data, '#usa');
    });

    axios.get('/continents/0/0')
    .then((res) => { 
        bindtoDatatableOne(res.data, '#continents');
    });

    axios.get('/countries/0/0')
    .then((res) => { 
        bindtoDatatableTwo(res.data, '#countries');
    });

    axios.get('/historical/0/30/all')
    .then((res) => { 
        for (const cases in res.data['cases']) {
            $('#historicaldataCases').append('<tr><td>'+cases+'</td><td>'+res.data['cases'][cases]+'</td></tr>');
        }
        for (const deaths in res.data['deaths']) {
            $('#historicaldataDeaths').append('<tr><td>'+deaths+'</td><td>'+res.data['deaths'][deaths]+'</td></tr>');
        }
        for (const recovered in res.data['recovered']) {
            $('#historicaldataRecovered').append('<tr><td>'+recovered+'</td><td>'+res.data['recovered'][recovered]+'</td></tr>');
        }
    });




    function bindtoDatatable(data, className) {
        var table = $(className).dataTable({
            "bAutoWidth" : false,
            "aaData" : data,
            "columns" : [ 
                {
                    "data" : "state"
                },
                {
                    "data" : "cases"
                },
                {
                    "data" : "todayCases"
                },
                {
                    "data" : "deaths"
                },
                {
                    "data" : "todayDeaths"
                },
                {
                    "data" : "active"
                },
                {
                    "data" : "tests"
                }
            ]
        })
    }


    function bindtoDatatableOne(data, className) {
        var table = $(className).dataTable({
            "bAutoWidth" : false,
            "aaData" : data,
            "columns" : [ 
                {
                    "data" : "continent"
                },
                {
                    "data" : "cases"
                },
                {
                    "data" : "todayCases"
                },
                {
                    "data" : "deaths"
                },
                {
                    "data" : "todayDeaths"
                },
                {
                    "data" : "recovered"
                },
                {
                    "data" : "todayRecovered"
                },
                {
                    "data" : "active"
                },
                {
                    "data" : "critical"
                },
                {
                    "data" : "tests"
                }
            ]
        })
    }



    function bindtoDatatableTwo(data, className) {
        var table = $(className).dataTable({
            "bAutoWidth" : false,
            "aaData" : data,
            "order": [[ 2, "desc" ]],
            "columns" : [ 
                {
                    "data" : "countryInfo.flag",
                    "render": function(data, type, row) {
                        return '<img src="'+data+'" />';
                    }
                },
                {
                    "data" : "country"
                },
                {
                    "data" : "cases"
                },
                {
                    "data" : "todayCases"
                },
                {
                    "data" : "deaths"
                },
                {
                    "data" : "todayDeaths"
                },
                {
                    "data" : "recovered"
                },
                {
                    "data" : "todayRecovered"
                },
                {
                    "data" : "active"
                },
                {
                    "data" : "critical"
                },
                {
                    "data" : "tests"
                }
            ]
        })
    }


    
    


    
</script>

</body>

</html>