<?php

namespace Ecs\CrmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PaymentMethodType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
		$months=array();
		$years=array();


        $builder
            ->add('cardtype','choice', array(
				'choices' => array(
					'V' => 'VISA',
					'M' => 'Master Card',
					'A' => 'Amex',
					'D' => 'Discover Card'
				)
			))
            ->add('cardnumber','text',array(
				'label' => 'Card Number'
				))
            ->add('expmonth','choice', array(
						'choices' => $this->get_months()
					)
				)
            ->add('expyear', 'choice', array(
						'choices' => $this->get_years()
					)
			)
            ->add('nameoncard', 'text')
            ->add('firstname', 'text')
            ->add('lastname', 'text')
            ->add('address', 'text')
            ->add('city', 'text')
            ->add('state', 'choice', array('choices' => $this->get_states()))
            ->add('zip', 'text')
        ;
    }

	private function get_months()
	{
		return array(
			'01' => '01 - Jan',
			'02' => '02 - Feb',
			'03' => '03 - Mar',
			'04' => '04 - Apr',
			'05' => '05 - May',
			'06' => '06 - Jun',
			'07' => '07 - Jul',
			'08' => '08 - Aug',
			'09' => '09 - Sep',
			'10' => '10 - Oct',
			'11' => '11 - Nov',
			'12' => '12 - Dec',
		);
	}

	private function get_years()
	{
		$intwenty = 60 *60 *24 *7 *52 * 20;
		$x = 0;
		$years = array();
		for($x = date('Y'); $x <= date('Y', time() + $intwenty); $x++)
		{
			$years[$x] = substr($x,-2);
		}
		return $years;
	}

	private function get_states()
	{
		return  array('AL'=>"Alabama",
                'AK'=>"Alaska",
                'AZ'=>"Arizona",
                'AR'=>"Arkansas",
                'CA'=>"California",
                'CO'=>"Colorado",
                'CT'=>"Connecticut",
                'DE'=>"Delaware",
                'DC'=>"District Of Columbia",
                'FL'=>"Florida",
                'GA'=>"Georgia",
                'HI'=>"Hawaii",
                'ID'=>"Idaho",
                'IL'=>"Illinois",
                'IN'=>"Indiana",
                'IA'=>"Iowa",
                'KS'=>"Kansas",
                'KY'=>"Kentucky",
                'LA'=>"Louisiana",
                'ME'=>"Maine",
                'MD'=>"Maryland",
                'MA'=>"Massachusetts",
                'MI'=>"Michigan",
                'MN'=>"Minnesota",
                'MS'=>"Mississippi",
                'MO'=>"Missouri",
                'MT'=>"Montana",
                'NE'=>"Nebraska",
                'NV'=>"Nevada",
                'NH'=>"New Hampshire",
                'NJ'=>"New Jersey",
                'NM'=>"New Mexico",
                'NY'=>"New York",
                'NC'=>"North Carolina",
                'ND'=>"North Dakota",
                'OH'=>"Ohio",
                'OK'=>"Oklahoma",
                'OR'=>"Oregon",
                'PA'=>"Pennsylvania",
                'RI'=>"Rhode Island",
                'SC'=>"South Carolina",
                'SD'=>"South Dakota",
                'TN'=>"Tennessee",
                'TX'=>"Texas",
                'UT'=>"Utah",
                'VT'=>"Vermont",
                'VA'=>"Virginia",
                'WA'=>"Washington",
                'WV'=>"West Virginia",
                'WI'=>"Wisconsin",
                'WY'=>"Wyoming");
	}

    public function getName()
    {
        return 'ecs_crmbundle_paymentmethodtype';
    }
}


