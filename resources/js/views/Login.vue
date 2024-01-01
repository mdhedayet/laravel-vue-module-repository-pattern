<template lang="">
    <div>
        <div class="container">
            <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6 col-sm-6 mt-5">
                <div class="card shadow">
                <div class="card-title text-center border-bottom">
                    <h2 class="p-3">Login</h2>
                </div>
                <div class="card-body">
                    <form>
                    <div class="mb-4">
                        <label for="username" class="form-label">Username/Email</label>
                        <input type="text"  class="form-control" id="username" autocomplete="off" />
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" autocomplete="off"  />
                    </div>
                    <div class="mb-4">
                        <input type="checkbox" class="form-check-input" id="remember" autocomplete="off" />
                        <label for="remember" class="form-label">Remember Me</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn text-light main-bg">Login</button>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {

}
</script>
<style lang="css">
    :root{
  --main-bg:#e91e63;
}

.main-bg {
  background: var(--main-bg) !important;
}

input:focus, button:focus {
  border: 1px solid var(--main-bg) !important;
  box-shadow: none !important;
}

.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}

.card, .btn, input{
  border-radius:0 !important;
}
</style>