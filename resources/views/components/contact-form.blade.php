<div>
    <form action="request" method="POST" class="margin-x-auto">
        @csrf
        <div class="input-wrapper">
            <input type="text" name="customer_name" placeholder="Име" required>
        </div>

        <div class="input-wrapper">
            <input type="email" name="customer_email" placeholder="Имейл" required>
        </div>

        <div class="input-wrapper">
            <textarea name="question" rows="10" placeholder="Вашият въпрос или съобщение" required></textarea>
        </div>

        <div class="input-wrapper flex align-items-center justify-content-center">
            <input type="checkbox" id="qform_terms" required>
            <label for="qform_terms">Прочетох и приемам <a href="">условията за ползване</a></label>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn__primary m0auto">Изпрати</button>
        </div>
    </form>
</div>