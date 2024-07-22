 <div class="col-xs-12 col-sm-8">
                            <div class="lmpixels-map">
                                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                            <div class="block-title">
                                <h3>How Can I <span>Help You?</span></h3>
                            </div>

                            <form id="contact_form" class="contact-form" wire:submit="save">

                                <div class="messages">{{ session('status') }}</div>

                                <div class="controls two-columns">
                                    <div class="fields clearfix">
                                        <div class="left-column">
                                            <div class="form-group form-group-with-icon">
                                                <input id="form_name" type="text" name="name" class="form-control"
                                                       placeholder="" required="required" wire:model="name"
                                                       data-error="Name is required.">
                                                <label>Full Name</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors">@error('name') {{$message}} @enderror</div>
                                            </div>

                                            <div class="form-group form-group-with-icon">
                                                <input id="form_email" type="email" name="email" class="form-control"
                                                       placeholder="" required="required" wire:model="email"
                                                       data-error="Valid email is required.">
                                                <label>Email Address</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors">@error('email') {{$message}} @enderror</div>
                                            </div>

                                            <div class="form-group form-group-with-icon">
                                                <input id="form_subject" type="text" name="subject" class="form-control"
                                                       placeholder="" required="required" wire:model="subject"
                                                       data-error="Subject is required.">
                                                <label>Subject</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors">@error('subject') {{$message}} @enderror</div>
                                            </div>
                                        </div>
                                        <div class="right-column">
                                            <div class="form-group form-group-with-icon">
                                                <textarea id="form_message" name="message" class="form-control"
                                                          placeholder="" rows="7" required="required" wire:model="message"
                                                          data-error="Please, leave me a message."></textarea>
                                                <label>Message</label>
                                                <div class="form-control-border"></div>
                                                <div class="help-block with-errors">@error('message') {{$message}} @enderror</div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"
                                         data-theme="dark"></div> --}}

                                    <input type="submit" value="Send message">
                                </div>
                            </form>
                        </div>