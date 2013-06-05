<?php

// src/Blogger/BlogBundle/Form/EnquiryType.php

namespace Blogger\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EnquiryType extends AbstractType {

	public function buildForm(FormBuilderInterface $builder, array $options) {
		$builder->add('name');
		$builder->add('email', 'email');
		$builder->add('subject');
		$builder->add('message', 'textarea');
		$builder->add('dueDate', 'date');
	}

	public function getName() {
		return 'contact';
	}

}
