<?php require_once("header.php"); 
$title = "Officer Application";
?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h2>Recruitment is open!</h2>
                <p class="lead">After some thought, the decision was made to introduce some structure into the Guild. This is being rolled out with the introduction of Officers!
                <br>
                If you wish to apply to be an officer, the form can be found below. Please note that applications are put forward to the current officers
                to decide on whether we feel whether a particular member would be ideal for the role.
                <br>
                There are increased responsibilities, including recruitment, summoning the Guild Dragomon when others are unable to, handing out promotions and dealing with inactivity.
                We also want Officers to put forward members who they feel have contributed, maintained activity and have been overall helpful!
                <br> 
                At any one time we will have up to 8 officers. Which means we have 5 available spots. 
                <br>
                <font color=red><small>Not everyone is the right fit to be an officer, so please don't be demoralised if your application is declined.</small></font>
                </p>
            </div>
            <div class="officerApplication">
                <?=Bootstrap::newForm('applicationpost.php', 'officerApplication');?>
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="exampleInputEmail1">In-Game Name (If different from registered name)</label>
                                <input type="text" class="form-control" id="username" placeholder="Enter your in-game name" name="name">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="timeInGuild">How long have you been with Eximia?</label>
                                <input type="text" class="form-control" id="timeInGuild" placeholder="Enter in days, weeks, or months" name="timeInGuild">
                            </fieldset>										
                            <fieldset class="form-group">
                                <label for="daysPerWeek">How many days a week do you play?</label>
                                <select class="form-control" id="daysPerWeek" name="daysPerWeek">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="timezone">What is your current time zone?</label>
                                <input type="text" class="form-control" id="timezone" placeholder="" name="timezone">
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="knowledge">We are looking for knowledgeable people, how well do you know the game?</label>
                                <textarea class="form-control" id="knowledge" rows="3" placeholder="Go Crazy!!" name="knowledge"></textarea>
                            </fieldset>	
                            <fieldset class="form-group">
                                <label for="otherContributions">Other than the standard duties, what else could you bring to the team?</label>
                                <textarea class="form-control" id="otherContributions" rows="3" placeholder="Be creative" name="otherContributions"></textarea>
                            </fieldset>	
                            <fieldset class="form-group">
                                <label for="daysPerWeekBoss">How many days a week can you attend the Guild Dragomon?</label>
                                <select class="form-control" id="daysPerWeekBoss" name="daysPerWeekBoss">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset class="form-group">	
                                <label for="whyMe">Why do you think you're right for the position?</label>
                                <textarea class="form-control" id="whyMe" rows="3" placeholder="Could be a good chance to make us laugh :D Please write as much possible! This is important" name="whyMe"></textarea>
                            </fieldset>		
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
                    </form>
           </div>
        </div>
    </div>
</div> 
                                                                                       </div>

<?php require_once("footer.php");