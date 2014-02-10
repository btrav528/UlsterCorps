<div class="container">
        <? $errors = isset($errors) ? $errors : array(); ?>
        <? if(isset($errors) && count($errors)): ?>
                <ul>
                <? foreach ($errors as $key => $value): ?>
                        <li><label><?=$key?>:</label> <?=$value?></li>
                <? endforeach; ?>
                </ul>
        <? endif; ?>
        <form action="?action=save" method="post"  class="form-horizontal row">
                <input type="hidden" name="Id" value="<?=$model['Id']?>" />
                
                <div class="form-group <?=isset($errors['FirstName']) ? 'has-error' : ''?>">
                        <label for="FirstName" class="col-sm-2 control-label">First Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="FirstName" id="FirstName" placeholder="First Name" class="form-control " value="<?=$model['FirstName']?>"  />
                        </div>
                        <span><?=@$errors['FirstName']?></span>
                </div>
                <div class="form-group <?=isset($errors['LastName']) ? 'has-error' : ''?>">
                        <label for="LastName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="LastName" id="LastName" placeholder="Last Name" class="form-control " value="<?=$model['LastName']?>"  />
                        </div>
                        <span><?=@$errors['LastName']?></span>
                </div>
                <div class="form-group <?=isset($errors['UserName']) ? 'has-error' : ''?>">
                        <label for="UserName" class="col-sm-2 control-label">Last Name</label>
                        <div class="col-sm-10">
                                <input type="text" name="UserName" id="UserName" placeholder="User Name" class="form-control " value="<?=$model['UserName']?>"  />
                        </div>
                        <span><?=@$errors['UserName']?></span>
                </div>
                <div class="form-group <?=isset($errors['Password']) ? 'has-error' : ''?>">
                        <label for="Password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                                <input type="password" name="Password" id="Password" placeholder="Password" class="form-control "  value="<?=$model['Password']?>" />
                        </div>
                        <span><?=@$errors['Password']?></span>
                </div>
                <div class="form-group <?=isset($errors['UserLevel']) ? 'has-error' : ''?>">
                        <label for="UserType" class="col-sm-2 control-label">User Level</label>
                        <div class="col-sm-10">
                                <input type="text" name="Level" id="Level" placeholder="Level" class="form-control "  value="<?=$model['Level']?>" />
                        </div>
                        <span><?=@$errors['UserType']?></span>
                </div>
                <div class="form-group <?=isset($errors['Artists']) ? 'has-error' : ''?>">
                        <label for="Artists" class="col-sm-2 control-label">Artist</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Artists' value='1' id='Artists' />
                        </div>
                        <span><?=@$errors['Artists']?></span>
                </div>
                 <div class="form-group <?=isset($errors['ComputerSkills']) ? 'has-error' : ''?>">
                        <label for="ComputerSkills" class="col-sm-2 control-label">Computer Skills</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='ComputerSkills' value='1' id='ComputerSkills' />
                        </div>
                        <span><?=@$errors['ComputerSkills']?></span>
                </div>
                 <div class="form-group <?=isset($errors['Construction']) ? 'has-error' : ''?>">
                        <label for="Construction" class="col-sm-2 control-label">Construction Skill</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Construction' value='1' id='Construction' />
                        </div>
                        <span><?=@$errors['Construction']?></span>
                        
                </div>
                <div class="form-group <?=isset($errors['Cooking']) ? 'has-error' : ''?>">
                        <label for="Cooking" class="col-sm-2 control-label">Cooking Skill</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Cooking' value='1' id='Cooking' />
                        </div>
                        <span><?=@$errors['Cooking']?></span>
                </div>
                <div class="form-group <?=isset($errors['EmergencyFeed']) ? 'has-error' : ''?>">
                        <label for="EmergencyFeed" class="col-sm-2 control-label">Emergency Response-Feeding</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='EmergencyFeed' value='1' id='EmergencyFeed' />
                        </div>
                        <span><?=@$errors['EmergencyFeed']?></span>
                </div>
                <div class="form-group <?=isset($errors['EmergencyShelter']) ? 'has-error' : ''?>">
                        <label for="EmergencyShelter" class="col-sm-2 control-label">Emergency Response-Shelter</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='EmergencyShelter' value='1' id='EmergencyShelter' />
                        </div>
                        <span><?=@$errors['EmergencyShelter']?></span>
                </div>
                <div class="form-group <?=isset($errors['Farming']) ? 'has-error' : ''?>">
                        <label for="Farming" class="col-sm-2 control-label">Farming</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Farming' value='1' id='Farming' />
                        </div>
                        <span><?=@$errors['Farming']?></span>
                </div>
                <div class="form-group <?=isset($errors['Financial']) ? 'has-error' : ''?>">
                        <label for="Financial" class="col-sm-2 control-label">Financial/Accounting</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Financial' value='1' id='Financial' />
                        </div>
                        <span><?=@$errors['Financial']?></span>
                </div>
                <div class="form-group <?=isset($errors['Fundraising']) ? 'has-error' : ''?>">
                        <label for="Fundraising" class="col-sm-2 control-label">Fundraising</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Fundraising' value='1' id='Fundraising' />
                        </div>
                        <span><?=@$errors['Fundraising']?></span>
                </div>
                <div class="form-group <?=isset($errors['Grantwriting']) ? 'has-error' : ''?>">
                        <label for="Grantwriting" class="col-sm-2 control-label">Grantwriting</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Grantwriting' value='1' id='Grantwriting' />
                        </div>
                        <span><?=@$errors['Grantwriting']?></span>
                </div>
                <div class="form-group <?=isset($errors['GraphicDesign']) ? 'has-error' : ''?>">
                        <label for="GraphicDesign" class="col-sm-2 control-label">Graphic Design</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='GraphicDesign' value='1' id='GraphicDesign' />
                        </div>
                        <span><?=@$errors['GraphicDesign']?></span>
                </div>
                <div class="form-group <?=isset($errors['HealthCare']) ? 'has-error' : ''?>">
                        <label for="HealthCare" class="col-sm-2 control-label">Health Care</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='HealthCare' value='1' id='HealthCare' />
                        </div>
                        <span><?=@$errors['HealthCare']?></span>
                </div>
                <div class="form-group <?=isset($errors['HeavyLifting']) ? 'has-error' : ''?>">
                        <label for="HeavyLifting" class="col-sm-2 control-label">Heavy Lifting</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='HeavyLifting' value='1' id='HeavyLifting' />
                        </div>
                        <span><?=@$errors['HeavyLifting']?></span>
                </div>
                <div class="form-group <?=isset($errors['Media']) ? 'has-error' : ''?>">
                        <label for="Media" class="col-sm-2 control-label">Media/PR</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Media' value='1' id='Media' />
                        </div>
                        <span><?=@$errors['Media']?></span>
                </div>
                <div class="form-group <?=isset($errors['MediationLegal']) ? 'has-error' : ''?>">
                        <label for="MediationLegal" class="col-sm-2 control-label">Mediation/Legal</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='MediationLegal' value='1' id='MediationLegal' />
                        </div>
                        <span><?=@$errors['MediationLegal']?></span>
                </div>
                <div class="form-group <?=isset($errors['MentalCare']) ? 'has-error' : ''?>">
                        <label for="MentalCare" class="col-sm-2 control-label">Mental Health Care</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='MentalCare' value='1' id='MentalCare' />
                        </div>
                        <span><?=@$errors['MentalCare']?></span>
                </div>
                <div class="form-group <?=isset($errors['Mentorship']) ? 'has-error' : ''?>">
                        <label for="Mentorship" class="col-sm-2 control-label">Mentorship</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Mentorship' value='1' id='Mentorship' />
                        </div>
                        <span><?=@$errors['Mentorship']?></span>
                </div>
                <div class="form-group <?=isset($errors['Research']) ? 'has-error' : ''?>">
                        <label for="Research" class="col-sm-2 control-label">Research</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Research' value='1' id='Research' />
                        </div>
                        <span><?=@$errors['Research']?></span>
                </div>
                <div class="form-group <?=isset($errors['Spanish']) ? 'has-error' : ''?>">
                        <label for="Spanish" class="col-sm-2 control-label">Spanish Speaker</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Spanish' value='1' id='Spanish' />
                        </div>
                        <span><?=@$errors['Spanish']?></span>
                </div>
                <div class="form-group <?=isset($errors['SpecialEvent']) ? 'has-error' : ''?>">
                        <label for="SpecialEvent" class="col-sm-2 control-label">Special Event Planning</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='SpecialEvent' value='1' id='SpecialEvent' />
                        </div>
                        <span><?=@$errors['SpecialEvent']?></span>
                </div>
                <div class="form-group <?=isset($errors['Transportation']) ? 'has-error' : ''?>">
                        <label for="Transportation" class="col-sm-2 control-label">Transportation</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Transportation' value='1' id='Transportation' />
                        </div>
                        <span><?=@$errors['Transportation']?></span>
                </div>
                <div class="form-group <?=isset($errors['Tutoring']) ? 'has-error' : ''?>">
                        <label for="Tutoring" class="col-sm-2 control-label">Tutoring</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='Tutoring' value='1' id='Tutoring' />
                        </div>
                        <span><?=@$errors['Tutoring']?></span>
                </div>
                <div class="form-group <?=isset($errors['VideoPhoto']) ? 'has-error' : ''?>">
                        <label for="VideoPhoto" class="col-sm-2 control-label">Videograpy/Photography</label>
                        <div class="col-sm-10">
                                <input type='checkbox' name='VideoPhoto' value='1' id='VideoPhoto' />
                        </div>
                        <span><?=@$errors['VideoPhoto']?></span>
                </div>
               </form>
