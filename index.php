<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="1800" />
    <title>NFL</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <link rel="stylesheet" href="./asset/css/styles.css">
    <link rel="stylesheet" href="./asset/css/general.css">
    <link rel="stylesheet" href="./asset/css/calculator.css">
    <link rel="stylesheet" href="./asset/css/lines.css">
    <link rel="stylesheet" href="./asset/css/matchup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    
    <style>

@media (max-width: 1199px) {
    .slidecontainer{    
        padding: 15px 115px 0px 30px;
    }
    
}
@media (max-width: 991px) {
    .slidecontainer{
        padding: 15px 115px 0px 30px;
    }
    .parlay{
        margin-right: 25px;
    }
}
@media (max-width: 767px) {
    .slidecontainer{    
        padding: 15px 115px 0px 30px;
    }
    .parlay{
        margin-right: 25px;
    }
}
@media (max-width: 575px) {
    .slidecontainer{
        padding: 15px 1px 1px 1px
    }
    .parlay{
        margin-right: 25px;
    }
}
@media (max-width: 480px) {
    .slidecontainer{    
        padding: 15px 1px 1px 1px
    }
    .parlay{
        margin-right: 25px;
    }
}
@media (max-width: 375px) {
    .slidecontainer{
        padding: 15px 1px 1px 1px
    }
    .parlay{
        margin-right: 25px;
    }
}
    </style>

<style>
        html, body {
            background:  url(./asset/icon/video.gif) no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
        }
    </style>
</head>
<body class="">

    <div class="container ">

        <header class="header">

        <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><img style="width: 120px;" src="https://cdn-akakg.nitrocdn.com/bIMMUdudihulpwiCqLBAIveBNdrlmLYS/assets/static/optimized/rev-52e8bd6/wp-content/uploads/2020/09/Win-With-port-d00b_00a1-300x174.png" alt="" srcset=""></a>

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-list" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-list">
            <ul class="navbar-nav">
            <li class="nav-item">
                            <a href="https://winwithsports.com/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://winwithsports.com/news/" class="nav-link">Sports News</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://winwithsports.com/our-packages/" class="nav-link">Our Packages</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://winwithsports.com/my-account/" class="nav-link">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="https://winwithsports.com/blog/" class="nav-link">Blog</a>
                        </li>
            </ul>
        </div>
        
        </nav>
                </header>

                    <div class="row" style="margin-right: 15px;">
                        <div class=" tabla col-12">
                            <br>
                            <br>
                            <center>
                                <div class="btn-group btn-group-md" role="group" aria-label="">
                                    <button type="button" id="NFL"              class="MbTN btn btn-primary active">NFL</button>
                                    <button type="button" id="NCAAF"            class="MbTN btn btn-primary">NCAAF</button>
                                    <button type="button" id="NBA"              class="MbTN btn btn-primary">NBA</button>
                                    <button type="button" id="NCAAB"            class="MbTN btn btn-primary">NCAAB</button>
                                    <button type="button" id="NHL"              class="MbTN btn btn-primary">NHL</button>
                                    <button type="button" id="MLB"              class="MbTN btn btn-primary">MLB</button>
                                </div>
                                <div class="btn-group btn-group-md" role="group" aria-label="">
                                    <button type="button" id="Calculadora" class="MbTN btn btn-primary">Odds Calculator</button>
                                    <button type="button" id="trends" class="MbTN btn btn-primary">Top Trends</button>               
                                    <button type="button" id="wagers" class="MbTN btn btn-primary">Top Wagers</button>               
                                </div>
                            </center>
                            <section id="NFLT">

                                <div class="card" >
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" id="games-list" role="tablist">
                                                <li class="nav-item">
                                                    <a class="btnM nav-link active" id='nfl-general' tabli="nfl" href="#general-nfl" role="tab" aria-controls="general" aria-selected="true">NFL</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link"  tabli="nfl" href="#Odds-nfl" role="tab" aria-controls="Odds" aria-selected="false">Odds</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nfl" href="#OddsVegas-nfl" role="tab" aria-controls="OddsVegas" aria-selected="false">Odds Vegas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nfl" href="#props-nfl" role="tab" aria-controls="props" aria-selected="false">Props</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nfl" href="#futures-nfl" role="tab" aria-controls="futures" aria-selected="false">Futures</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nfl" href="#teams-nfl" role="tab" aria-controls="teams" aria-selected="false">Teams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nfl" href="#injuries-nfl" role="tab" aria-controls="injuries" aria-selected="false">Injuries</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nfl" href="#matchups-nfl" role="tab" aria-controls="matchups" aria-selected="false">Matchups</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane clen active" id="general-nfl" role="tabpanel"> 
                                                </div>
                                                <div class="tab-pane clen" id="Odds-nfl" role="tabpanel" aria-labelledby="Odds-tab">  
                                                </div>
                                                <div class="tab-pane clen" id="OddsVegas-nfl" role="tabpanel" aria-labelledby="OddsVegas-tab" >
                                                </div>
                                                <div class="tab-pane clen" id="props-nfl" role="tabpanel" aria-labelledby="props-tab">
                                                </div>
                                                <div class="tab-pane clen" id="futures-nfl" role="tabpanel" aria-labelledby="futures-tab">
                                                </div>
                                                <div class="tab-pane clen" id="teams-nfl" role="tabpanel" aria-labelledby="teams-tab">
                                                </div>
                                                <div class="tab-pane clen" id="injuries-nfl" role="tabpanel" aria-labelledby="injuries-tab">
                                                </div>
                                                <div class="tab-pane clen" id="matchups-nfl" role="tabpanel" aria-labelledby="matchups-tab">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </section>
                            <section id="NCAAFT" style="display:none;">
                                <div class="card" >
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" id="games-list" role="tablist">
                                                <li class="nav-item">
                                                    <a class="btnM nav-link active" id='ncaaf-general' tabli="ncaaf" href="#general-ncaaf" role="tab" aria-controls="general" aria-selected="true">NCAAF</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link"  tabli="ncaaf" href="#Odds-ncaaf" role="tab" aria-controls="Odds" aria-selected="false">Odds</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaaf" href="#OddsVegas-ncaaf" role="tab" aria-controls="OddsVegas" aria-selected="false">Odds Vegas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaaf" href="#teams-ncaaf" role="tab" aria-controls="teams" aria-selected="false">Teams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaaf" href="#injuries-ncaaf" role="tab" aria-controls="injuries" aria-selected="false">Injuries</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaaf" href="#matchups-ncaaf" role="tab" aria-controls="matchups" aria-selected="false">Matchups</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane clen active" id="general-ncaaf" role="tabpanel"> 
                                                </div>
                                                <div class="tab-pane clen" id="Odds-ncaaf" role="tabpanel" aria-labelledby="Odds-tab">  
                                                </div>
                                                <div class="tab-pane clen" id="OddsVegas-ncaaf" role="tabpanel" aria-labelledby="OddsVegas-tab" >
                                                </div>
                                                <div class="tab-pane clen" id="teams-ncaaf" role="tabpanel" aria-labelledby="teams-tab">
                                                </div>
                                                <div class="tab-pane clen" id="injuries-ncaaf" role="tabpanel" aria-labelledby="injuries-tab">
                                                </div>
                                                <div class="tab-pane clen" id="matchups-ncaaf" role="tabpanel" aria-labelledby="matchups-tab">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </section>
                            <section id="NCAABT" style="display:none;">
                                <div class="card" >
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" id="games-list" role="tablist">
                                                <li class="nav-item">
                                                    <a class="btnM nav-link active" id='ncaab-general' tabli="ncaab" href="#general-ncaab" role="tab" aria-controls="general" aria-selected="true">NCAAb</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link"  tabli="ncaab" href="#Odds-ncaab" role="tab" aria-controls="Odds" aria-selected="false">Odds</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaab" href="#OddsVegas-ncaab" role="tab" aria-controls="OddsVegas" aria-selected="false">Odds Vegas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaab" href="#teams-ncaab" role="tab" aria-controls="teams" aria-selected="false">Teams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaab" href="#injuries-ncaab" role="tab" aria-controls="injuries" aria-selected="false">Injuries</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="ncaab" href="#matchups-ncaab" role="tab" aria-controls="matchups" aria-selected="false">Matchups</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane clen active" id="general-ncaab" role="tabpanel"> 
                                                </div>
                                                <div class="tab-pane clen" id="Odds-ncaab" role="tabpanel" aria-labelledby="Odds-tab">  
                                                </div>
                                                <div class="tab-pane clen" id="OddsVegas-ncaab" role="tabpanel" aria-labelledby="OddsVegas-tab" >
                                                </div>
                                                <div class="tab-pane clen" id="teams-ncaab" role="tabpanel" aria-labelledby="teams-tab">
                                                </div>
                                                <div class="tab-pane clen" id="injuries-ncaab" role="tabpanel" aria-labelledby="injuries-tab">
                                                </div>
                                                <div class="tab-pane clen" id="matchups-ncaab" role="tabpanel" aria-labelledby="matchups-tab">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </section>
                            <section id="NBAT" style="display:none;">
                                <div class="card" >
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" id="games-list" role="tablist">
                                                <li class="nav-item">
                                                    <a class="btnM nav-link active" id='nba-general' tabli="nba" href="#general-nba" role="tab" aria-controls="general" aria-selected="true">nba</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link"  tabli="nba" href="#Odds-nba" role="tab" aria-controls="Odds" aria-selected="false">Odds</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nba" href="#OddsVegas-nba" role="tab" aria-controls="OddsVegas" aria-selected="false">Odds Vegas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nba" href="#props-nba" role="tab" aria-controls="props" aria-selected="false">Props</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nba" href="#futures-nba" role="tab" aria-controls="futures" aria-selected="false">Futures</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nba" href="#teams-nba" role="tab" aria-controls="teams" aria-selected="false">Teams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nba" href="#injuries-nba" role="tab" aria-controls="injuries" aria-selected="false">Injuries</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nba" href="#matchups-nba" role="tab" aria-controls="matchups" aria-selected="false">Matchups</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane clen active" id="general-nba" role="tabpanel"> 
                                                </div>
                                                <div class="tab-pane clen" id="Odds-nba" role="tabpanel" aria-labelledby="Odds-tab">  
                                                </div>
                                                <div class="tab-pane clen" id="OddsVegas-nba" role="tabpanel" aria-labelledby="OddsVegas-tab" >
                                                </div>
                                                <div class="tab-pane clen" id="props-nba" role="tabpanel" aria-labelledby="props-tab">
                                                </div>
                                                <div class="tab-pane clen" id="futures-nba" role="tabpanel" aria-labelledby="futures-tab">
                                                </div>
                                                <div class="tab-pane clen" id="teams-nba" role="tabpanel" aria-labelledby="teams-tab">
                                                </div>
                                                <div class="tab-pane clen" id="injuries-nba" role="tabpanel" aria-labelledby="injuries-tab">
                                                </div>
                                                <div class="tab-pane clen" id="matchups-nba" role="tabpanel" aria-labelledby="matchups-tab">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </section>
                            <section id="NHLT" style="display:none;">
                                <div class="card" >
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" id="games-list" role="tablist">
                                                <li class="nav-item">
                                                    <a class="btnM nav-link active" id='nhl-general' tabli="nhl" href="#general-nhl" role="tab" aria-controls="general" aria-selected="true">nhl</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link"  tabli="nhl" href="#Odds-nhl" role="tab" aria-controls="Odds" aria-selected="false">Odds</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nhl" href="#OddsVegas-nhl" role="tab" aria-controls="OddsVegas" aria-selected="false">Odds Vegas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nhl" href="#teams-nhl" role="tab" aria-controls="teams" aria-selected="false">Teams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nhl" href="#injuries-nhl" role="tab" aria-controls="injuries" aria-selected="false">Injuries</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="nhl" href="#matchups-nhl" role="tab" aria-controls="matchups" aria-selected="false">Matchups</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane clen active" id="general-nhl" role="tabpanel"> 
                                                </div>
                                                <div class="tab-pane clen" id="Odds-nhl" role="tabpanel" aria-labelledby="Odds-tab">  
                                                </div>
                                                <div class="tab-pane clen" id="OddsVegas-nhl" role="tabpanel" aria-labelledby="OddsVegas-tab" >
                                                </div>
                                                <div class="tab-pane clen" id="teams-nhl" role="tabpanel" aria-labelledby="teams-tab">
                                                </div>
                                                <div class="tab-pane clen" id="injuries-nhl" role="tabpanel" aria-labelledby="injuries-tab">
                                                </div>
                                                <div class="tab-pane clen" id="matchups-nhl" role="tabpanel" aria-labelledby="matchups-tab">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </section>
                            <section id="MLBT" style="display:none;">
                                <div class="card" >
                                        <div class="card-header">
                                            <ul class="nav nav-tabs card-header-tabs" id="games-list" role="tablist">
                                                <li class="nav-item">
                                                    <a class="btnM nav-link active" id='mlb-general' tabli="mlb" href="#general-mlb" role="tab" aria-controls="general" aria-selected="true">mlb</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link"  tabli="mlb" href="#Odds-mlb" role="tab" aria-controls="Odds" aria-selected="false">Odds</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="mlb" href="#OddsVegas-mlb" role="tab" aria-controls="OddsVegas" aria-selected="false">Odds Vegas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="mlb" href="#props-mlb" role="tab" aria-controls="props" aria-selected="false">Props</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="mlb" href="#futures-mlb" role="tab" aria-controls="futures" aria-selected="false">Futures</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="mlb" href="#teams-mlb" role="tab" aria-controls="teams" aria-selected="false">Teams</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="mlb" href="#injuries-mlb" role="tab" aria-controls="injuries" aria-selected="false">Injuries</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="btnM nav-link" tabli="mlb" href="#matchups-mlb" role="tab" aria-controls="matchups" aria-selected="false">Matchups</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane clen active" id="general-mlb" role="tabpanel"> 
                                                </div>
                                                <div class="tab-pane clen" id="Odds-mlb" role="tabpanel" aria-labelledby="Odds-tab">  
                                                </div>
                                                <div class="tab-pane clen" id="OddsVegas-mlb" role="tabpanel" aria-labelledby="OddsVegas-tab" >
                                                </div>
                                                <div class="tab-pane clen" id="props-mlb" role="tabpanel" aria-labelledby="props-tab">
                                                </div>
                                                <div class="tab-pane clen" id="futures-mlb" role="tabpanel" aria-labelledby="futures-tab">
                                                </div>
                                                <div class="tab-pane clen" id="teams-mlb" role="tabpanel" aria-labelledby="teams-tab">
                                                </div>
                                                <div class="tab-pane clen" id="injuries-mlb" role="tabpanel" aria-labelledby="injuries-tab">
                                                </div>
                                                <div class="tab-pane clen" id="matchups-mlb" role="tabpanel" aria-labelledby="matchups-tab">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </section>
                            <section id="CalculadoraT" style="display:none;">
                                <div class="card" >
                                        <div class="card-header">
                                            
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content mt-3">
                                                <div class="tab-pane active" id="Cal" role="tabpanel">

                                                        <div class="parlay" data-role="calculator" >

                                                                <div class="row">
                                                                    <div class="col-lg-2">
                                                                            <span>Bet Amount</span>
                                                                        </div>
                                                                        <div class="col-lg-4">

                                                                            <div class="input-group mb-3">
                                                                                <div class="input-group-prepend">
                                                                                    <span class="input-group-text">$</span>
                                                                                </div>
                                                                                <input type="number" id = "cant" class="form-control" placeholder="100" aria-label="Amount (to the nearest dollar)">
                                                                                
                                                                            </div>

                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <ul class="parlay-presets">
                                                                                <li>
                                                                                    <span class="btnC" cant ="100" class="parlay-preset">$100</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="btnC" cant ="200" class="parlay-preset">$200</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="btnC" cant ="300" class="parlay-preset">$500</span>
                                                                                </li>
                                                                                <li>
                                                                                    <span class="btnC" cant ="400" class="parlay-preset">$1000</span>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                        <div class="col-lg-2">
                                                                            <div>
                                                                                <span>Odds</span>
                                                                                    <div>If betting a favorite, enter the line with a minus (-) sign at the beginning</div>
                                                                                <br>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <ul class="parlay-inputs" >
                                                                                <li>
                                                                                            

                                                                                    <div class="parlay-input">
                                                                                        <input id="most1" class="parlay-bet" placeholder="Enter your bet 10">
                                                                                        <button btn = "1"tabindex="-1" class="parlay-clear">Clear</button>
                                                                                    </div>
                                                                                        
                                                                                    <form>
                                                                                        <div class="form-group">
                                                                                            <div class="slidecontainer">
                                                                                                <input type="range" min="-100" max="100" value="0" sl="1" class="slider form-control-range" id="myRange">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="parlay-input">
                                                                                        <input id="most2" class="parlay-bet" placeholder="Enter your bet 11">
                                                                                        <button  btn = "2" tabindex="-1" class="parlay-clear">Clear</button>
                                                                                    </div>
                                                                                    
                                                                                    <form>
                                                                                        <div class="form-group">
                                                                                            <div class="slidecontainer">
                                                                                                <input type="range" min="-100" max="100" value="0" sl="2" class="slider" id="myRange">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="parlay-input">
                                                                                        <input id="most3" class="parlay-bet" placeholder="Enter your bet 12.1">
                                                                                        <button btn = "3" tabindex="-1" class="parlay-clear">Clear</button>
                                                                                    </div>
                                                                                    
                                                                                    <form>
                                                                                        <div class="form-group">
                                                                                            <div class="slidecontainer">
                                                                                                <input type="range" min="-100" max="100" value="0" sl="3" class="slider" id="myRange">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                                <li>
                                                                                    <div class="parlay-input">
                                                                                        <input id="most4" class="parlay-bet" placeholder="Enter your bet 13.31">
                                                                                        <button  btn = "4" tabindex="-1" class="parlay-clear">Clear</button>
                                                                                    </div>
                                                                                    
                                                                                    <form>
                                                                                        <div class="form-group">
                                                                                            <div class="slidecontainer">
                                                                                                <input type="range" min="-100" max="100" value="0" sl="4" class="slider" id="myRange">
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                </div>
                                        <br>
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <span>Payout</span>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" id="TotalM" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-secondary" id=btnT type="button">Clear All</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                </div>
                            </section>

                            <section id="MostT" style="display:none;">
                                <div class="card" >
                                    <div class="card-header">
                                        
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content mt-3">
                                            <div class="tab-pane active"  role="tabpanel">
                                                <div id="matchUpMost">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section id="trendsT" style="display:none;">
                                <div class="card">

                                    <div class="card-header">
                                            
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content mt-3">
                                                <center>
                                            <div class="tab-pane clen active" id="trendsmos" role="tabpanel"> 
                                            </div>
                                                </center>    
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section id="wagersT" style="display:none;">
                                <center>
                                    <div class="wagers" style="margin-top: 25px;"></div>
                                </center>
                            </section>
                        </div>
                    </div>
      
    </div>

    
    

    <script src="./asset/jquery/jquery-3.5.1.js"></script>   
    <script src="./asset/funciones/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>