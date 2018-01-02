---
title: Contacto
form:
    name: my-nice-form
    fields:
        - name: Nome
          label: Nome
          placeholder: Inserir nome
          autofocus: on
          autocomplete: on
          type: text
          validate:
            required: true

        - name: email
          label: Email
          placeholder: Inserir email
          type: text
          validate:
            rule: email
            required: true

        - name: Mensagem
          label: Mensagem
          size: long
          placeholder: Inserir mensagem
          type: textarea
          validate:
            required: true

    buttons:
        - type: submit
          value: Enviar »
          classes: btn

    process:
        - email:
            from: "{{ config.plugins.email.from }}"
            to:
              - "{{ config.plugins.email.from }}"
              - "{{ form.value.email }}"
            subject: "[Feedback] {{ form.value.name|e }}"
            body: "{% include 'forms/data.html.twig' %}"
        - save:
            fileprefix: feedback-
            dateformat: Ymd-His-u
            extension: txt
            body: "{% include 'forms/data.txt.twig' %}"
        - message: Obrigado pelo seu contacto, seremos breves a responder!
        - display: thankyou
---
Envia-nos uma mensagem com sugestõs!
