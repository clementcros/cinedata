<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">Contactez-nous</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form action="<?php echo base_url('index.php/Contact/form')?>" method="post">
                <div class="row">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name_contact">Nom</label>
                            <input name="name_contact" type="text" class="form-control" id="name_contact" placeholder="Entrez votre nom" required="required"/>
                        </div>

                        <div class="form-group">
                            <label for="email_contact">Adresse électronique</label>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <span class="fa fa-envelope-o"></span>
                                </span>
                                <input name="email_contact" type="email" class="form-control" id="email_contact" placeholder="Entrez votre adresse electronique" required="required"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="default" selected="">Choissisez:</option>
                                <option value="option1">option 1</option>
                                <option value="option2">option 2</option>
                                <option value="option3">option 3</option>
                            </select>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            <label for="name">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">Envoyer votre message</button>
                    </div>

                </div>

                </form>
            </div>
        </div>