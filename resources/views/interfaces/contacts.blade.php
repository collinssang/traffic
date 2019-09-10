 <div id="contact">
            <div class="contact fullscreen parallax" style="background-color: grey" data-img-width="2000" data-img-height="1334" data-diff="100">
                <div class="overlay">
                    <div class="container">
                        <div class="row contact-row">

                            <!-- /.address and contact -->
                            <div class="col-sm-5 contact-left wow fadeInUp">
                                <h2><span class="highlight">Get</span> in touch</h2>
                                <ul class="ul-address">
                                    <li><i class="pe-7s-map-marker"></i>Kirichwa road , Nairobi,</br>
                                        Nairobi, Kenya
                                    </li>
                                    <li><i class="pe-7s-phone"></i>+254 710131515</br>
                                        
                                    </li>
                                    <li><i class="pe-7s-mail"></i><a href="mailto:kipkuruicollinssang@gmail.com">info@kanadsystemsltd.com,</a></li>
                                    <li><i class="pe-7s-look"></i><a href="#">www.kanadsystemsltd.com</a></li>
                                     <li><i class="pe-7s-mail"></i>
                                        We agree not to disclose any Personal  Information without your prior written consent. Personal information and any other information made available by Google that is marked confidential or would normally be considered confidential under the circumstances in which it is presented. <br> Google Confidential Information does not include information that you already knew prior to your use of the Services, that becomes public through no fault of ours, that was independently developed by you, or that was lawfully given to us by a third party.  Notwithstanding this, you may accurately disclose the amount of System's gross payments resulting from your use of the Services
                                    </li>
                                </ul>
                            </div>

                            <!-- /.contact form -->
                            <div class="col-sm-7 contact-right">
                            <div class="messageSent" style="display: none;"></div>
                                <form method="POST" id="contact-form" class="form-horizontal" action="{{url('/contactengine')}}">
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <input type="text" name="Name" id="Name" class="form-control wow fadeInUp" placeholder="Name" required/>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="Email" id="Email" class="form-control wow fadeInUp" placeholder="Email" required/>
                                    </div>					
                                    <div class="form-group">
                                        <textarea name="Message" rows="20" cols="20" id="Message" class="form-control input-message wow fadeInUp"  placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" value="Submit" class="btn btn-success wow fadeInUp" />
                                    </div>
                                </form>		
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>