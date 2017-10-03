
<div class="col-lg-6">
	<div class="panel panel-default">
		<div class="panel-body">
        <form action="scriptupload.php" method="post">
			<div class="form-group">
  				<label>Script Name</label>
  				<input name="name_input" type="text" class="form-control" placeholder="Example : Taxi Mod">

  				<label>Short Description</label>
  				<textarea name="discription_input" type="text" class="form-control" rows="2" placeholder="Max 250"></textarea>

  				<label>Features</label>
  				<textarea name="features_input" type="text" class="form-control" rows="5" placeholder="Long description"></textarea>

  				<label>Price</label>
  				<input name="price_input" type="double" class="form-control" placeholder="Example : 12.5">

  				<label>Game</label>
  				<select name="game_input" class="form-control">
      			<option>GTA</option>
      			<option>Arma I</option>
      			<option>Arma II</option>
  				</select>
	    </form>
              <label>Category</label><p> Try to select the categories that match your script the most</p>
		        <div class="form-group col-lg-6">                                                                                                   					
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" value="">Weapons
                      </label>
                  </div>
                  <div class="checkbox">
                      <label>
                          <input type="checkbox" value="">Maps
                      </label>
                  </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">Model
                        </label>
                    </div>
                </div>
               </div>
                <hr>
                
                <label>Mod Upload</label><p>We only accept zip compressed files</p>
                <input type="file">
                
                <button type="submit" class="btn btn-default pull-left">Submit Button</button>
            </div>
        </div>
	</div>
