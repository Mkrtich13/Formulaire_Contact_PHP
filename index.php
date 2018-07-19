<!DOCTYPE html>
<html lang="frS">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</head>

<body>
    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <form id="contact-form" action="" method="POST" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom *</label>
                            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="Votre prénom" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="name">Nom *</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email *</label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Votre email" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-6">
                            <label for="phone">Téléphone</label>
                            <input type="tel" id="phone" name="phone" class="form-control" placeholder="Votre téléphone" value="">
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <label for="message">Message *</label>
                            <textarea name="message" id="message" class="form-control" placeholder="Votre message" cols="30" rows="4"></textarea>
                            <p class="comments"></p>
                        </div>
                        <div class="col-md-12">
                            <p>* Champs obligatoire</p>
                        </div>
                        <div class="col-md-12">
                            <input type="submit" id="contact-submit" class="button1" value="Envoyer">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
    
</body>

</html>