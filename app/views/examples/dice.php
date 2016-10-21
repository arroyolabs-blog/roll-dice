<div class="container">
    	<div class="page-header" id="banner">
        <div class="row">         
          <div style="text-align: center">
            <h1>Roll the dice!</h1>
            <button type="button" class="btn btn-info" onclick="getDiceRequest()">Go to Request</button>
            <button  id="ajaxBtn" type="button" class="btn btn-success" onclick="getAjaxDiceRequest()">
                      Get Ajax Request!
            </button>
              <div id="diceContainer" 
                   class="panel panel-container" 
                   style="text-align: center;display:none">
                <div class="panel-heading text-center">Dice Result</div>
                <div class="panel-body">
                    <img id="diceImg" class="img-responsive center-block" 
                                      alt="Dice result" 
                                      height="42" 
                                      width="42">
                </div>
              </div>
          </div>
        </div>       
    </div>
</div>