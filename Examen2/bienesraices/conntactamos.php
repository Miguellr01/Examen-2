
    <section>
        <h2>Contactamos</h2>
        <!--Image-->
    </section>

    <section>
        <h2>Llene el formulario de Contacto</h2>
        <form action="">
            <!--nombre, email, telefono, mensaje, vende  o compra, cantidad, desea contactar, fecha, hora, boton-->
            <fieldset>
                <legend>Informacion Personal</legend>
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>
            <div>
                <label for="phone">Telefono</label>
                <input type="text" name="phone" id="phone">
            </div>
            <div>
                <label for="msg">Mensaje</label>
                <textarea name="msg" id="msg"></textarea>
            </div>
            <div>
                <button type="submit"> Contactar</button>
            </div>
        </fieldset>

        <fieldset>
            <legend>Informacion de la Propiedad</legend>
            <div>
                <label for="ventacompra">Vende o Compra</label>
                <input type="number" name="cantidda" id="cantidad">
            </div>
        </fieldset>

        <fieldset>
            <legend>Contacto</legend>
            <div>
                <label for="tel">Telefono</label>
                <input type="redio" name="tel" id="tel">
                <label for="tel">Email</label>
                <input type="redio" name="mail" id="mail">
            </div>
        </fieldset>
        <div>
            <button type="submit">Contactar</button>
        </div>
        <div>
        </form>
    </section>
    <?php include "includes/footer.php"?>