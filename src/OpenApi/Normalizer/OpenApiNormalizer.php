<?php

namespace Jane\OpenApi\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OpenApiNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'Jane\\OpenApi\\Model\\OpenApi') {
            return false;
        }

        return true;
    }

    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \Jane\OpenApi\Model\OpenApi) {
            return true;
        }

        return false;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \Jane\OpenApi\Model\OpenApi();
        if (property_exists($data, 'swagger')) {
            $object->setSwagger($data->{'swagger'});
        }
        if (property_exists($data, 'info')) {
            $object->setInfo($this->denormalizer->denormalize($data->{'info'}, 'Jane\\OpenApi\\Model\\Info', 'json', $context));
        }
        if (property_exists($data, 'host')) {
            $object->setHost($data->{'host'});
        }
        if (property_exists($data, 'basePath')) {
            $object->setBasePath($data->{'basePath'});
        }
        if (property_exists($data, 'schemes')) {
            $values = [];
            foreach ($data->{'schemes'} as $value) {
                $values[] = $value;
            }
            $object->setSchemes($values);
        }
        if (property_exists($data, 'consumes')) {
            $values_1 = [];
            foreach ($data->{'consumes'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setConsumes($values_1);
        }
        if (property_exists($data, 'produces')) {
            $values_2 = [];
            foreach ($data->{'produces'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setProduces($values_2);
        }
        if (property_exists($data, 'paths')) {
            $values_3 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'paths'} as $key => $value_3) {
                if (preg_match('/^x-/', $key) && isset($value_3)) {
                    $values_3[$key] = $value_3;
                    continue;
                }
                if (preg_match('/^\//', $key) && is_object($value_3)) {
                    $values_3[$key] = $this->denormalizer->denormalize($value_3, 'Jane\\OpenApi\\Model\\PathItem', 'json', $context);
                    continue;
                }
            }
            $object->setPaths($values_3);
        }
        if (property_exists($data, 'definitions')) {
            $values_4 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'definitions'} as $key_1 => $value_4) {
                $values_4[$key_1] = $this->denormalizer->denormalize($value_4, 'Jane\\OpenApi\\Model\\Schema', 'json', $context);
            }
            $object->setDefinitions($values_4);
        }
        if (property_exists($data, 'parameters')) {
            $values_5 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'parameters'} as $key_2 => $value_5) {
                $value_6 = $value_5;
                if (is_object($value_5) and isset($value_5->{'name'}) and (isset($value_5->{'in'}) and $value_5->{'in'} == 'body') and isset($value_5->{'schema'})) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\OpenApi\\Model\\BodyParameter', 'json', $context);
                }
                if (is_object($value_5) and (isset($value_5->{'in'}) and $value_5->{'in'} == 'header') and isset($value_5->{'name'}) and (isset($value_5->{'type'}) and ($value_5->{'type'} == 'string' or $value_5->{'type'} == 'number' or $value_5->{'type'} == 'boolean' or $value_5->{'type'} == 'integer' or $value_5->{'type'} == 'array'))) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\OpenApi\\Model\\HeaderParameterSubSchema', 'json', $context);
                }
                if (is_object($value_5) and (isset($value_5->{'in'}) and $value_5->{'in'} == 'formData') and isset($value_5->{'name'}) and (isset($value_5->{'type'}) and ($value_5->{'type'} == 'string' or $value_5->{'type'} == 'number' or $value_5->{'type'} == 'boolean' or $value_5->{'type'} == 'integer' or $value_5->{'type'} == 'array' or $value_5->{'type'} == 'file'))) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\OpenApi\\Model\\FormDataParameterSubSchema', 'json', $context);
                }
                if (is_object($value_5) and (isset($value_5->{'in'}) and $value_5->{'in'} == 'query') and isset($value_5->{'name'}) and (isset($value_5->{'type'}) and ($value_5->{'type'} == 'string' or $value_5->{'type'} == 'number' or $value_5->{'type'} == 'boolean' or $value_5->{'type'} == 'integer' or $value_5->{'type'} == 'array'))) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\OpenApi\\Model\\QueryParameterSubSchema', 'json', $context);
                }
                if (is_object($value_5) and (isset($value_5->{'required'}) and $value_5->{'required'} == '1') and (isset($value_5->{'in'}) and $value_5->{'in'} == 'path') and isset($value_5->{'name'}) and (isset($value_5->{'type'}) and ($value_5->{'type'} == 'string' or $value_5->{'type'} == 'number' or $value_5->{'type'} == 'boolean' or $value_5->{'type'} == 'integer' or $value_5->{'type'} == 'array'))) {
                    $value_6 = $this->denormalizer->denormalize($value_5, 'Jane\\OpenApi\\Model\\PathParameterSubSchema', 'json', $context);
                }
                $values_5[$key_2] = $value_6;
            }
            $object->setParameters($values_5);
        }
        if (property_exists($data, 'responses')) {
            $values_6 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'responses'} as $key_3 => $value_7) {
                $values_6[$key_3] = $this->denormalizer->denormalize($value_7, 'Jane\\OpenApi\\Model\\Response', 'json', $context);
            }
            $object->setResponses($values_6);
        }
        if (property_exists($data, 'security')) {
            $values_7 = [];
            foreach ($data->{'security'} as $value_8) {
                $values_8 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
                foreach ($value_8 as $key_4 => $value_9) {
                    $values_9 = [];
                    foreach ($value_9 as $value_10) {
                        $values_9[] = $value_10;
                    }
                    $values_8[$key_4] = $values_9;
                }
                $values_7[] = $values_8;
            }
            $object->setSecurity($values_7);
        }
        if (property_exists($data, 'securityDefinitions')) {
            $values_10 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'securityDefinitions'} as $key_5 => $value_11) {
                $value_12 = $value_11;
                if (is_object($value_11) and (isset($value_11->{'type'}) and $value_11->{'type'} == 'basic')) {
                    $value_12 = $this->denormalizer->denormalize($value_11, 'Jane\\OpenApi\\Model\\BasicAuthenticationSecurity', 'json', $context);
                }
                if (is_object($value_11) and (isset($value_11->{'type'}) and $value_11->{'type'} == 'apiKey') and isset($value_11->{'name'}) and (isset($value_11->{'in'}) and ($value_11->{'in'} == 'header' or $value_11->{'in'} == 'query'))) {
                    $value_12 = $this->denormalizer->denormalize($value_11, 'Jane\\OpenApi\\Model\\ApiKeySecurity', 'json', $context);
                }
                if (is_object($value_11) and (isset($value_11->{'type'}) and $value_11->{'type'} == 'oauth2') and (isset($value_11->{'flow'}) and $value_11->{'flow'} == 'implicit') and isset($value_11->{'authorizationUrl'})) {
                    $value_12 = $this->denormalizer->denormalize($value_11, 'Jane\\OpenApi\\Model\\Oauth2ImplicitSecurity', 'json', $context);
                }
                if (is_object($value_11) and (isset($value_11->{'type'}) and $value_11->{'type'} == 'oauth2') and (isset($value_11->{'flow'}) and $value_11->{'flow'} == 'password') and isset($value_11->{'tokenUrl'})) {
                    $value_12 = $this->denormalizer->denormalize($value_11, 'Jane\\OpenApi\\Model\\Oauth2PasswordSecurity', 'json', $context);
                }
                if (is_object($value_11) and (isset($value_11->{'type'}) and $value_11->{'type'} == 'oauth2') and (isset($value_11->{'flow'}) and $value_11->{'flow'} == 'application') and isset($value_11->{'tokenUrl'})) {
                    $value_12 = $this->denormalizer->denormalize($value_11, 'Jane\\OpenApi\\Model\\Oauth2ApplicationSecurity', 'json', $context);
                }
                if (is_object($value_11) and (isset($value_11->{'type'}) and $value_11->{'type'} == 'oauth2') and (isset($value_11->{'flow'}) and $value_11->{'flow'} == 'accessCode') and isset($value_11->{'authorizationUrl'}) and isset($value_11->{'tokenUrl'})) {
                    $value_12 = $this->denormalizer->denormalize($value_11, 'Jane\\OpenApi\\Model\\Oauth2AccessCodeSecurity', 'json', $context);
                }
                $values_10[$key_5] = $value_12;
            }
            $object->setSecurityDefinitions($values_10);
        }
        if (property_exists($data, 'tags')) {
            $values_11 = [];
            foreach ($data->{'tags'} as $value_13) {
                $values_11[] = $this->denormalizer->denormalize($value_13, 'Jane\\OpenApi\\Model\\Tag', 'json', $context);
            }
            $object->setTags($values_11);
        }
        if (property_exists($data, 'externalDocs')) {
            $object->setExternalDocs($this->denormalizer->denormalize($data->{'externalDocs'}, 'Jane\\OpenApi\\Model\\ExternalDocs', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSwagger()) {
            $data->{'swagger'} = $object->getSwagger();
        }
        if (null !== $object->getInfo()) {
            $data->{'info'} = $this->normalizer->normalize($object->getInfo(), 'json', $context);
        }
        if (null !== $object->getHost()) {
            $data->{'host'} = $object->getHost();
        }
        if (null !== $object->getBasePath()) {
            $data->{'basePath'} = $object->getBasePath();
        }
        if (null !== $object->getSchemes()) {
            $values = [];
            foreach ($object->getSchemes() as $value) {
                $values[] = $value;
            }
            $data->{'schemes'} = $values;
        }
        if (null !== $object->getConsumes()) {
            $values_1 = [];
            foreach ($object->getConsumes() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'consumes'} = $values_1;
        }
        if (null !== $object->getProduces()) {
            $values_2 = [];
            foreach ($object->getProduces() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'produces'} = $values_2;
        }
        if (null !== $object->getPaths()) {
            $values_3 = new \stdClass();
            foreach ($object->getPaths() as $key => $value_3) {
                if (preg_match('/^x-/', $key) && !is_null($value_3)) {
                    $values_3->{$key} = $value_3;
                    continue;
                }
                if (preg_match('/^\//', $key) && is_object($value_3)) {
                    $values_3->{$key} = $this->normalizer->normalize($value_3, 'json', $context);
                    continue;
                }
            }
            $data->{'paths'} = $values_3;
        }
        if (null !== $object->getDefinitions()) {
            $values_4 = new \stdClass();
            foreach ($object->getDefinitions() as $key_1 => $value_4) {
                $values_4->{$key_1} = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'definitions'} = $values_4;
        }
        if (null !== $object->getParameters()) {
            $values_5 = new \stdClass();
            foreach ($object->getParameters() as $key_2 => $value_5) {
                $value_6 = $value_5;
                if (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                if (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                if (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                if (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                if (is_object($value_5)) {
                    $value_6 = $this->normalizer->normalize($value_5, 'json', $context);
                }
                $values_5->{$key_2} = $value_6;
            }
            $data->{'parameters'} = $values_5;
        }
        if (null !== $object->getResponses()) {
            $values_6 = new \stdClass();
            foreach ($object->getResponses() as $key_3 => $value_7) {
                $values_6->{$key_3} = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'responses'} = $values_6;
        }
        if (null !== $object->getSecurity()) {
            $values_7 = [];
            foreach ($object->getSecurity() as $value_8) {
                $values_8 = new \stdClass();
                foreach ($value_8 as $key_4 => $value_9) {
                    $values_9 = [];
                    foreach ($value_9 as $value_10) {
                        $values_9[] = $value_10;
                    }
                    $values_8->{$key_4} = $values_9;
                }
                $values_7[] = $values_8;
            }
            $data->{'security'} = $values_7;
        }
        if (null !== $object->getSecurityDefinitions()) {
            $values_10 = new \stdClass();
            foreach ($object->getSecurityDefinitions() as $key_5 => $value_11) {
                $value_12 = $value_11;
                if (is_object($value_11)) {
                    $value_12 = $this->normalizer->normalize($value_11, 'json', $context);
                }
                if (is_object($value_11)) {
                    $value_12 = $this->normalizer->normalize($value_11, 'json', $context);
                }
                if (is_object($value_11)) {
                    $value_12 = $this->normalizer->normalize($value_11, 'json', $context);
                }
                if (is_object($value_11)) {
                    $value_12 = $this->normalizer->normalize($value_11, 'json', $context);
                }
                if (is_object($value_11)) {
                    $value_12 = $this->normalizer->normalize($value_11, 'json', $context);
                }
                if (is_object($value_11)) {
                    $value_12 = $this->normalizer->normalize($value_11, 'json', $context);
                }
                $values_10->{$key_5} = $value_12;
            }
            $data->{'securityDefinitions'} = $values_10;
        }
        if (null !== $object->getTags()) {
            $values_11 = [];
            foreach ($object->getTags() as $value_13) {
                $values_11[] = $this->normalizer->normalize($value_13, 'json', $context);
            }
            $data->{'tags'} = $values_11;
        }
        if (null !== $object->getExternalDocs()) {
            $data->{'externalDocs'} = $this->normalizer->normalize($object->getExternalDocs(), 'json', $context);
        }

        return $data;
    }
}