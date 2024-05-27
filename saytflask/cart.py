from werkzeug.exceptions import abort

from flask import (
    Blueprint, flash, g, redirect, render_template, request, session, url_for, jsonify
)
from werkzeug.security import check_password_hash, generate_password_hash

from flaskr.db import get_db

bp = Blueprint('cart', __name__)
@bp.route('/prof')
def index():
    global suma
    db = get_db()
    products = db.cursor().execute(
        'SELECT id, name, type, size, price, quantity, author_id FROM cart'
    ).fetchallmap() # замените fetchall() на fetchone() или fetchmany(size)

    return render_template('prof.html', products=products, suma=suma )
suma = 0

@bp.route('/add_cort_kyrtka1', methods=('GET', 'POST'))
def add_cort_kyrtka1():
    name = 'Куртка кожаная весенняя'
    type = 'Куртка'
    size = 'XL'
    price = '6000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/cyrtka1.html'), error is None

def update_suma(price):
    """Обновляет общую сумму корзины."""
    global suma
    suma += float(price.replace('руб', ''))  # Преобразуем цену в число


@bp.route('/add_cort_kyrtka2', methods=('GET', 'POST'))
def add_cort_kyrtka2():
    name = 'Куртка кожаная весенняя'
    type = 'Куртка'
    size = 'XL'
    price = '5500руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/cyrtka2.html'), error is None

@bp.route('/add_cort_kyrtka3', methods=('GET', 'POST'))
def add_cort_kyrtka3():
    name = 'Куртка кожаная весенняя'
    type = 'Куртка'
    size = 'XL'
    price = '6000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/cyrtka3.html'), error is None


@bp.route('/add_cort_kyrtka4', methods=('GET', 'POST'))
def add_cort_kyrtka4():
    name = 'Куртка из полиэстера'
    type = 'Куртка'
    size = 'XL'
    price = '5000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/cyrtka4.html'), error is None




@bp.route('/add_cort_kyrtka5', methods=('GET', 'POST'))
def add_cort_kyrtka5():
    name = 'Куртка из полиэстера'
    type = 'Куртка'
    size = 'XL'
    price = '5500руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/cyrtka5.html'), error is None

@bp.route('/add_cort_kyrtka6', methods=('GET', 'POST'))
def add_cort_kyrtka6():
    name = 'Куртка из полиэстера'
    type = 'Куртка'
    size = 'XL'
    price = '7000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/cyrtka6.html'), error is None




@bp.route('/add_cort_futbolka1', methods=('GET', 'POST'))
def add_cort_futbolka1():
    name = 'Футболка белая с принтом'
    type = 'Футболка'
    size = 'XL'
    price = '3000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/futbolka1.html'), error is None


@bp.route('/add_cort_futbolka2', methods=('GET', 'POST'))
def add_cort_futbolka2():
    name = 'Футболка белая с принтом'
    type = 'Футболка'
    size = 'XL'
    price = '2000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/futbolka2.html'), error is None

@bp.route('/add_cort_futbolka3', methods=('GET', 'POST'))
def add_cort_futbolka3():
    name = 'Футболка белая с принтом'
    type = 'Футболка'
    size = 'XL'
    price = '3500руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/futbolka3.html'), error is None




@bp.route('/add_cort_watelazka1', methods=('GET', 'POST'))
def add_cort_watelazka1():
    name = 'Шерстяная водолазка'
    type = 'Водолазка'
    size = 'XL'
    price = '3500руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/waterlazka1.html'), error is None



@bp.route('/add_cort_watelazka2', methods=('GET', 'POST'))
def add_cort_watelazka2():
    name = 'Шерстяная водолазка'
    type = 'Водолазка'
    size = 'XL'
    price = '4000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/waterlazka2.html'), error is None


@bp.route('/add_cort_watelazka3', methods=('GET', 'POST'))
def add_cort_watelazka3():
    name = 'Шерстяная водолазка'
    type = 'Водолазка'
    size = 'XL'
    price = '3000руб'
    quantity = '1'
    current_user = g.user
    db = get_db()
    error = None

    if error is None:
        try:
            db.cursor().execute(
                "INSERT INTO cart (name, type, size, price, quantity, author_id) VALUES (?, ?, ?, ?, ?, ?)",
                (name, type, size, price, quantity, current_user['id']),
            )
            db.commit()
            update_suma(price)  # Обновляем общую сумму
        except db.IntegrityError as e:
            if e.args[0] == 1062:  # isc_unique_key_violation
                error = f"{name} уже положена в корзину."
        except Exception as e:
            print(f"An error occurred: {e}")
            db.rollback()
    else:
        flash(error)

    return render_template('towar/waterlazka3.html'), error is None



@bp.route('/buy' , methods=('GET', 'POST'))
def buy():
    global suma
    if request.method == 'POST':
        address = request.form['address']
        sposob = request.form['sposob']
        contact = request.form['contact']
        current_user = g.user
        db = get_db()
        error = None
        try:
            db.cursor().execute(
                "INSERT INTO orders ( address, sposob, contact, suma, author_id) VALUES ( ?, ?, ?, ?, ?)",
                (address, sposob, contact, suma, current_user['id']),
            )
            db.commit()
            db.cursor().execute("DELETE FROM cart")
            db.commit()
            suma = 0
            db.close()
        except db.IntegrityError as e:
            if e.args[0] == 1062:
                error = f"Положена в корзину."
        finally:
            if error is not None:
                flash(error)

    return render_template('prof.html', suma=suma)


@bp.route('/delete-item', methods=('GET', 'POST'))
def delete_item():
    global suma
    db = get_db()  
    if request.method == 'GET':
        item_id = request.args.get('item_id')
    elif request.method == 'POST':
        item_id = request.json.get('item_id')
    else:
        abort(405)  # Метод не поддерживается

    user_id = g.user['id']
    author_id = user_id

    id = item_id

    cur = db.cursor()
    cur.execute('SELECT price FROM cart WHERE id = ? AND author_id = ?', (id, author_id))
    price = cur.fetchone()
    if price:
        suma = suma - float(price[0].replace('руб', ''))
    else:
        pass

    cur = db.cursor()
    cur.execute('DELETE FROM cart WHERE id = ? AND author_id = ?', (id, author_id))
    db.commit()
    cur.close()

    return render_template('prof.html', suma=suma)



