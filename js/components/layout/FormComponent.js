export default {
    template: `
    <section id="regForm">
            <form action="admin/sign-up.php" method="post">
                <p>We hope you enjoyed reading about Ontario just as much as we do! Subscribe to our newsletter to get notifications about events and locations you might find interesting!</p>

                <label for ="first-name">First Name</label>
                <input id="first-name" name="fname" type="text">

                <label for ="last-name">Last Name</label>
                <input id="last-name" name="lname" type="text">

                <label for ="email">Email</label>
                <input id="email" name="email" type="email">

                <label for ="country">Country</label>
                <input id="country" name="country" type="text">

                <button type="submit">Submit</button>
            </form>
        </section>
    `,
}