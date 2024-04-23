<div class="start-project-overlay">
  <!-- Add is-active -->
  <div class="wrapper">
    <button class="close-btn display-block js-closebutton">
      <span></span>
      <span></span>
    </button>
    <div class="container inner">
      <div class="row">
        <div class="col-100">
          <h2 class="h1 deco-line lh-1 color-black">Начать проект</h2>
          <!-- The form -->
          <form action="#" id="modal-form" class="form-overlay modal-form">
            <div class="form-body">
              <div class="success"><span></span></div>
              <ul class="form-fields">
                <li>
                  <div class="input-container">
                    <input name="name" type="text" value="" class="large" required placeholder="Ваше имя *" >
                  </div>
                </li>
                <li>
                  <div class="input-container">
                    <input name="phone" type="tel" data-phone-pattern value="" class="large" required placeholder="Номер телефона *" >
                  </div>
                </li>
                <li>
                  <div class="input-container">
                    <input name="email" type="email" value="" class="large" placeholder="E-mail" >
                  </div>
                </li>
                <li>
                  <div class="input-container area-container">
                    <textarea name="message" id="message-contact" rows="7" required
                      placeholder="Краткое описание проекта / работ *"></textarea>
                  </div>
                </li>
              </ul>
              <div class="checkbox-container flex">
                <input type="checkbox" name="formcheck" id="form-checkbox" value="">
                <label for="form-checkbox">Я даю согласие на обработку предоставленных данных</label>
              </div>
            </div>
            <div class="form-footer mt-1">
              <div id="answer-overlay"></div>
              <button class="form-btn" name="formbutton" id="form-submit-button">Отправить</button>
              <input type="hidden" class="form-hidden" name="project_name" value="Сайт Владлена Щетинина">
              <input type="hidden" class="form-hidden" name="form_subject"
                value="Сообщение с модальной формы обратной связи">
              <input type="text" class="helpmess" name="target_text" value="">
              <input type="text" class="form-target_page-text" name="target_page-text" value="">
              <input type="number" class="form-target_page-number" name="target_page-number" value="">
              <input type="email" class="form-target_page-email" name="target_page-email" value="">
              <input type="tel" class="form-target_page-phone" name="target_page-phone" value="">
            </div>
          </form>
          <!-- The form -->
        </div>
      </div>
    </div>
  </div>
</div>
