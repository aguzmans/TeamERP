<?php
namespace TeamERP\CustomerBundle\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use TeamERP\CustomerBundle\Form\DataTransformer\CompanyToTextTransformer;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
/**
 * Description of CompanySelectorType
 *
 * @author Abel Guzman
 */
class CompanySelectorType extends AbstractType {
    /**
    * @var ObjectManager
    */
    private $om;
    /**
    * @param ObjectManager $om
    */
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $transformer = new CompanyToTextTransformer($this->om);
        $builder->addModelTransformer($transformer);
    }
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'invalid_message' => 'The selected company does not exist',
        ));
    }
    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'company_selector';
    }

}
