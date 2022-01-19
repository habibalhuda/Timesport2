<?=$this->extend( 'layout/template' );?>

<?=$this->section( 'content' );?>
<div class="container">
    <div class="row">
        <h1><?=$title;?></h1>
        <<div id="carousel-personal-loan" class="carousel slide">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <p>hai</p>
                <div class="item active">
                    <div class="row per-loan-gender">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-4">
                            <div class="row male_or_female">
                                <div class="quote-title" msg="Please select your gender">My gender</div>
                                <div class="col-xs-6 male">
                                    <label>
                                        <img src="1.png" />
                                        <input type="radio" name="gender" id="male" value="male">
                                        <span>Male</span>
                                    </label>
                                </div>
                                <div class="col-xs-6 female">
                                    <label>
                                        <img src="2.png" />
                                        <input type="radio" name="gender" id="female" value="female">
                                        <span>Female</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="row per-loan-city">
                        <div class="quote-title" msg="Please select the place where you live.">Where do you live
                            currently?</div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-2">
                            <label>
                                <img src="3.png" width="130" height="130">
                                <input type="radio" name="livecity" id="hyderabad" value="hyderabad">
                                <span>Hyderabad</span>
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label>
                                <img src="4.png" width="130" height="130">
                                <input type="radio" name="livecity" id="chennai" value="chennai">
                                <span>Chennai</span>
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label>
                                <img src="5.png" width="130" height="130">
                                <input type="radio" name="livecity" id="bangalore" value="bangalore">
                                <span>Bangalore</span>
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label>
                                <img src="6.png" width="130" height="130">
                                <input type="radio" name="livecity" id="hosur" value="hosur">
                                <span>Hosur</span>
                            </label>
                        </div>
                        <div class="col-xs-2">
                            <label>
                                <img src="7.png" width="130" height="130">
                                <input type="radio" name="livecity" id="other_city" value="other city">
                                <span>Other City</span>
                            </label>
                        </div>
                        <div class="col-xs-1"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="row per-loan-sources">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-4">
                            <div class="row sal_or_self">
                                <div class="quote-title" msg="Please select: Are you....">Are You</div>
                                <div class="col-xs-6 male">
                                    <a href="#">
                                        <img src="8.png" />
                                        <input type="radio" name="areyou" value="...">
                                        <span>Salaried</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 female">
                                    <a href="#">
                                        <img src="9.png" />
                                        <input type="radio" name="areyou" value="...">
                                        <span>Self-employed</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4"></div>
                    </div>
                </div>
                <div class="item">
                    <div class="row per-loan-sources">
                        <div class="col-xs-4"></div>
                        <div class="col-xs-4">
                            <div class="row male_or_female">
                                <div class="quote-title" msg="Please select default on loan...">Ever Defaulted on any
                                    Loan Or Credit card?</div>
                                <div class="col-xs-6 male">
                                    <a href="#">
                                        <img src="10.png" />
                                        <input type="radio" name="defonloan" value="...">
                                        <span>Yes</span>
                                    </a>
                                </div>
                                <div class="col-xs-6 female">
                                    <a href="#">
                                        <img src="11.png" />
                                        <input type="radio" name="defonloan" value="...">
                                        <span>No</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4"></div>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-personal-loan" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-personal-loan" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
    </div>

    <!--  MODAL ADDED  -->
    <div class="modal fade" tabindex="-1" role="dialog" id="msgModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?=$this->endSection();?>