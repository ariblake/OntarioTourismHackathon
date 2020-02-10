export default {
    template: `
    <section id="regForm">
        <form action="admin/sign-up.php" method="post">
            <h1>Register for more info</h1>

            <label for ="first-name">First Name</label>
            <input id="first-name" name="fname" type="text">

            <label for ="last-name">Last Name</label>
            <input id="last-name" name="lname" type="text">

            <label for ="email">Email</label>
            <input id="email" name="email" type="email">

            <label for ="country">Country</label>
            <input id="country" name="country" type="country">

            <button type="submit">Submit</button>
        </form>
    </section>
    `,
}