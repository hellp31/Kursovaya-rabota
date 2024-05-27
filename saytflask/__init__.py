from flask import Flask, render_template, url_for
from flask_sqlalchemy import SQLAlchemy
from datetime import datetime
import fdb
import os





def create_app(test_config=None):
    # create and configure the app
    app = Flask(__name__, instance_relative_config=True)
    app.config.from_mapping(
        SECRET_KEY='dev',
        DATABASE=os.path.join(app.instance_path, 'flaskr.fdb'),
        USER='sysdba',
        PASSWORD='masterkey',
        LIBRARY=os.path.join(app.root_path, 'rdb/libfbclient.so')
    )


    if test_config is None:
        # load the instance config, if it exists, when not testing
        app.config.from_pyfile('config.py', silent=True)
    else:
        # load the test config if passed in
        app.config.from_mapping(test_config)

    # ensure the instance folder exists
    try:
        os.makedirs(app.instance_path)
    except OSError:
        pass

    from . import auth
    app.register_blueprint(auth.bp)


    @app.route('/')
    @app.route('/home')
    def index():
        return render_template("index.html")

    @app.route('/all')
    def all():
        return render_template("all.html")


    @app.route('/about')
    def about():
        return render_template("about.html")


    @app.route('/cyrtki')
    def cyrtki():
        return render_template("cyrtki.html")



    @app.route('/football')
    def tshirt():
        return render_template("football.html")


    @app.route('/waterlazka')
    def water():
        return render_template("waterlazka.html")







    @app.route('/cyrtca_koj_vesen')
    def cyrtca_koj_vesen():
        cart={'id':'1'}
        return render_template("towar/cyrtka1.html"), cart

    @app.route('/cyrtca_koj_vesen_kor')
    def cyrtca_koj_vesen_kor():
        return render_template("towar/cyrtka2.html")

    @app.route('/cyrtca_koj_vesen_cher')
    def cyrtca_koj_vesen_cher():
        return render_template("towar/cyrtka3.html")




    @app.route('/cyrtca_polyistr_bezmex')
    def cyrtca_polyistr_bezmex():
        return render_template("towar/cyrtka4.html")

    @app.route('/cyrtca_polyistr_smex_bel')
    def cyrtca_polyistr_smex_bel():
        return render_template("towar/cyrtka5.html")

    @app.route('/cyrtca_polyistr_smex_ser')
    def cyrtca_polyistr_smex_ser():
        return render_template("towar/cyrtka6.html")




    @app.route('/futbolka_print_ser')
    def futbolka_print_ser():
        return render_template("towar/futbolka1.html")

    @app.route('/futbolka_print_tsevet_6')
    def futbolka_print_tsevet_6():
        return render_template("towar/futbolka2.html")

    @app.route('/futbolka_print_tsevet_mnogo')
    def futbolka_print_tsevet_mnogo():
        return render_template("towar/futbolka3.html")





    @app.route('/waterlazka_kor')
    def waterlazka_kor():
        return render_template("towar/waterlazka1.html")

    @app.route('/waterlazka_ser')
    def waterlazka_ser():
        return render_template("towar/waterlazka2.html")

    @app.route('/waterlazka_tel')
    def waterlazka_tel():
        return render_template("towar/waterlazka3.html")

    from . import cart
    app.register_blueprint(cart.bp)
    app.add_url_rule('/prof', endpoint='index')

    from . import db
    db.init_app(app)



    return app



