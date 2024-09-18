<?php

namespace Drupal\hello_name\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class HelloNameForm extends FormBase
{

    public function getFormId()
    {
        return 'hello_name_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        // Adding TailwindCSS classes to the form elements
        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Your name'),
            '#required' => true,
            '#attributes' => [
                'class' => ['w-2/5', 'mt-8', 'px-4', 'py-2', 'border', 'rounded-md', 'focus:outline-none', 'focus:ring', 'focus:border-blue-300'],
                'placeholder' => $this->t('Enter your name'),
            ],
            '#title_display' => 'invisible',
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Submit'),
            '#attributes' => [
                'class' => ['mt-4', 'w-2/5', 'bg-blue-500', 'text-white', 'py-2', 'rounded-md', 'hover:bg-blue-600', 'focus:outline-none', 'focus:ring', 'focus:ring-blue-300'],
            ],
        ];

        return $form;
    }

    public function submitForm2(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getValue('name');
        \Drupal::messenger()->addMessage($this->t('Hello, @name!', ['@name' => $name]));
        $form_state->setRedirect('hello_name.greeting', ['name' => $name]);
    }

    public function greeting($name)
    {
        return [
            '#markup' => $this->t('Hello, @name!',
                ['@name' => $name]
            ),
        ];
    }

    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getValue('name');
        $form_state->setRedirect('hello_name.greeting', ['name' => $name]);
    }
}
