<nav class="bg-gray-800/50">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="flex items-center">
        <!-- Logo -->
        <div class="shrink-0">
          <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500" 
               alt="Your Company" class="size-8" />
        </div>

        <!-- Desktop Menu -->
        <div class="hidden md:block">
          <?php $currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>
          <div class="ml-10 flex items-baseline space-x-4">
            <!-- Home -->
            <a href="/"
              class="rounded-md px-3 py-2 text-sm font-medium 
              <?= $currentUri === '/' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
              Home
            </a>

            <!-- About -->
            <a href="/about"
              class="rounded-md px-3 py-2 text-sm font-medium 
              <?= $currentUri === '/about' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
              About
            </a>

            <!-- Notes -->
            <?php if (isset($_SESSION['user'])) : ?>
            <a href="/notes"
              class="rounded-md px-3 py-2 text-sm font-medium 
              <?= $currentUri === '/notes' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
              Notes
            </a>
            <?php endif; ?>

            <!-- Contact -->
            <a href="/contact"
              class="rounded-md px-3 py-2 text-sm font-medium 
              <?= $currentUri === '/contact' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">
              Contact us
            </a>
          </div>
        </div>
      </div>

      <!-- Right Side (Auth Buttons) -->
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <?php if (isset($_SESSION['user'])) : ?>
            <!-- Logged in → Logout Form -->
            <div class="ml-3">
              <form method="POST" action="/sessions">
                <input type="hidden" name="_method" value="DELETE"/>
                <button type="submit" class="text-sm font-medium text-gray-300 hover:text-white">
                  Logout
                </button>
              </form>
            </div>
          <?php else : ?>
            <!-- Not logged in → Register & Login -->
            <div class="flex space-x-3">
              <a href="/register" class="text-sm font-medium text-gray-300 hover:text-white">Register</a>
              <a href="/login" class="text-sm font-medium text-gray-300 hover:text-white">Login</a>
            </div>
          <?php endif; ?>
        </div>
      </div>

      <!-- Mobile menu button -->
      <div class="-mr-2 flex md:hidden">
        <button type="button" command="--toggle" commandfor="mobile-menu" 
          class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" 
               aria-hidden="true" class="size-6 in-aria-expanded:hidden">
            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" 
                  stroke-linecap="round" stroke-linejoin="round" />
          </svg>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" 
               aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
            <path d="M6 18 18 6M6 6l12 12" 
                  stroke-linecap="round" stroke-linejoin="round" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!-- Mobile Menu -->
  <el-disclosure id="mobile-menu" hidden class="block md:hidden">
    <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
      <a href="/" class="block rounded-md px-3 py-2 text-base font-medium <?= $currentUri === '/' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Home</a>
      <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium <?= $currentUri === '/about' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">About</a>
      <a href="/notes" class="block rounded-md px-3 py-2 text-base font-medium <?= $currentUri === '/notes' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Notes</a>
      <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium <?= $currentUri === '/contact' ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' ?>">Contact</a>
    </div>
    <div class="border-t border-white/10 pt-4 pb-3 px-2">
      <?php if (isset($_SESSION['user'])) : ?>
        <div class="ml-3">
          <form method="POST" action="/sessions">
            <input type="hidden" name="_method" value="DELETE"/>
            <button type="submit" class="block w-full text-left rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5">
              Logout
            </button>
          </form>
        </div>
      <?php else : ?>
        <a href="/register" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5">Register</a>
        <a href="/login" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5">Login</a>
      <?php endif; ?>
    </div>
  </el-disclosure>
</nav>
