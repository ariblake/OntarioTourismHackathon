export default {
    template: `
    <section id="regForm">
            <form>
              <label style="text-align:center;" for="country">Country:</label>
              <input v-model="input.country" style="text-align:center;" type="text" id="country" name="country" value="" placeholder="Country" required>
              <label style="text-align:center;" for="firstname">First Name:</label>
              <input v-model="input.firstname" type="text" style="text-align:center;" id="firstname" name="firstname" value="" placeholder="First Name" required>
              <label style="text-align:center;" for="lastname">Last Name:</label>
              <input v-model="input.lastname" type="text" style="text-align:center;" id="lastname" name="lastname" value="" placeholder="Last Name" required>
              <label style="text-align:center;" for="email">Email:</label>
              <input v-model="input.email" type="email" style="text-align:center;" id="email" name="email" value="" placeholder="Email Address" required>
              <button v-on:click="signup()" type="submit" name="submit" class="button success">Submit</button>
      </form>
        </section>
    `,


}