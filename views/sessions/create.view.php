<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
</header>

<main>
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8 bg-gray-50">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" 
           alt="Your Company" 
           class="mx-auto h-10 w-auto" />
      <h2 class="mt-10 text-center text-2xl font-bold tracking-tight text-gray-900">
        Login to your account
      </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm bg-white p-6 rounded-lg shadow-md">
      <form action="/sessions" method="POST" class="space-y-6">
        
        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
          <div class="mt-2">
            <input id="email" type="email" name="email" required autocomplete="email"
              class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
          </div>
          <div class="text-sm text-red-600">
            <?php if (isset($errors['email'])) : ?>
              <p><?php echo $errors['email']; ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <div class="mt-2">
            <input id="password" type="password" name="password" required autocomplete="current-password"
              class="block w-full rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-400 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" />
          </div>
          <div class="text-sm text-red-600">
            <?php if (isset($errors['password'])) : ?>
              <p><?php echo $errors['password']; ?></p>
            <?php endif; ?>
          </div>
        </div>

        <!-- Submit -->
        <div>
          <button type="submit"
            class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-500">
            Login
          </button>
        </div>
      </form>

      <p class="mt-6 text-center text-sm text-gray-500">
        Don’t have an account? 
        <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">Register</a>
      </p>
    </div>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>
