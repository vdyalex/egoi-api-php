<?php
namespace Egoi;

use Egoi\Egoi;

class Translate
{
	const SUBSCRIBER_UNCONFIRMED    	= 0;
	const SUBSCRIBER_ACTIVE         	= 1;
	const SUBSCRIBER_REMOVED        	= 2;
	const SUBSCRIBER_INACTIVE       	= 4;
	
	const VALIDATE_SYNTAX               = 0;
	const VALIDATE_SYNTAX_MX            = 1;
	const VALIDATE_SYNTAX_MX_ADDRESS    = 2;
	
	const STATUS_TYPE_ERROR				= 0;
	const STATUS_TYPE_SUCCESS			= 1;
	const STATUS_TYPE_WARNING			= 2;
	
	const TYPE_GENERAL					= 1;
	const TYPE_ACCESS					= 2;
	const TYPE_LIST						= 3;
	const TYPE_SUBSCRIBER				= 4;
	const TYPE_EMAIL					= 5;
	const TYPE_PHONE					= 6;

    public static $types                = array(
        self::TYPE_GENERAL      => 'general',
        self::TYPE_ACCESS       => 'access',
        self::TYPE_LIST         => 'list',
        self::TYPE_SUBSCRIBER   => 'subscriber',
        self::TYPE_EMAIL        => 'email',
        self::TYPE_PHONE        => 'phone',
    );
	
	const LANG_EN = 'en';
	const LANG_BR = 'br';
	
	public static $status = array(
		'CANNOT_BE_DELETED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_GENERAL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Impossível remover este item.',
			),
		),
		'ALREADY_DELETED' => array(
			'status' => self::STATUS_TYPE_SUCCESS,
			'type' => self::TYPE_GENERAL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'O assinante já foi removido.',
			),
		),
		'LIST_NOT_FOUND' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_LIST,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Lista não encontrada. Entre em contato com o administrador.',
			),
		),
		'LIST_MISSING' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_LIST,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Lista não encontrada. Entre em contato com o administrador.',
			),
		),
		'NO_MORE_LISTS_ALLOWED' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_LIST,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Limite de listas excedido. Entre em contato com o administrador.',
			),
		),
		'NO_ACCESS' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_ACCESS,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso não permitido. Entre em contato com o administrador.',
			),
		),
		'NO_USERNAME_AND_PASSWORD' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_ACCESS,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso não permitido. Entre em contato com o administrador.',
			),
		),
		'NO_USERNAME' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_ACCESS,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso não permitido. Entre em contato com o administrador.',
			),
		),
		'NO_PASSWORD' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_ACCESS,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Acesso nao permitido. Entre em contato com o administrador.',
			),
		),
		'EMAIL_REQUIRED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_EMAIL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'O preenchimento do e-mail é obrigatório.',
			),
		),
		'SUBSCRIBER_MISSING' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_SUBSCRIBER,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante não encontrado.',
			),
		),
		'NO_SUBSCRIBERS' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_SUBSCRIBER,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Lista sem assinantes.',
			),
		),
		'CANNOT_ADD_MORE_SUBSCRIBERS' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_SUBSCRIBER,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Não é permitido adicionar mais assinantes a esta lista. Entre em contato com o administrador.',
			),
		),
		'SUBSCRIBER_DATA_CANNOT_BE_EDITED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_SUBSCRIBER,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Não é permitido alterar os dados deste assinante.',
			),
		),
		'SUBSCRIBER_ALREADY_REMOVED' => array(
			'status' => self::STATUS_TYPE_SUCCESS,
			'type' => self::TYPE_SUBSCRIBER,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante removido com sucesso!',
			),
		),
		'SUBSCRIBER_NOT_FOUND' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_SUBSCRIBER,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante não encontrado.',
			),
		),
		'EMAIL_ADDRESS_INVALID_DOESNT_EXIST' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_EMAIL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Endereço de e-mail inexistente.',
			),
		),
		'EMAIL_ALREADY_EXISTS' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_EMAIL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Endereço de e-mail já cadastrado.',
			),
		),
		'EMAIL_ADDRESS_INVALID' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_EMAIL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Endereço de e-mail inválido. Preencha os dados corretamente.',
			),
		),
		'TELEPHONE_ALREADY_EXISTS' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_PHONE,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Telefone já cadastrado.',
			),
		),
		'TELEPHONE_REQUIRED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_PHONE,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'O preenchimento do telefone é obrigatório.',
			),
		),
		'CELLPHONE_ALREADY_EXISTS' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_PHONE,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Celular já cadastrado.',
			),
		),
		'CELLPHONE_REQUIRED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_PHONE,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'O preenchimento do celular é obrigatório.',
			),
		),
		'NO_CELLPHONE_OR_TELEPHONE' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_PHONE,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Preencha o telefone corretamente.',
			),
		),
		'FAX_ALREADY_EXISTS' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_PHONE,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Fax já cadastrado.',
			),
		),
		'FAX_REQUIRED' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_PHONE,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'O preenchimento do fax é obrigatório.',
			),
		),
		'NO_DATA_TO_INSERT' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_GENERAL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Preencha os dados corretamente.',
			),
		),
		'INTERNAL_ERROR' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_GENERAL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Ocorreu um erro ao processar.',
			),
		),
		'ERROR' => array(
			'status' => self::STATUS_TYPE_ERROR,
			'type' => self::TYPE_GENERAL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Ocorreu um erro ao processar.',
			),
		),
		'WARNING' => array(
			'status' => self::STATUS_TYPE_WARNING,
			'type' => self::TYPE_GENERAL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Ocorreu uma falha ao processar.',
			),
		),
		'SUCCESS' => array(
			'status' => self::STATUS_TYPE_SUCCESS,
			'type' => self::TYPE_GENERAL,
			'message' => array(
				self::LANG_EN => '',
				self::LANG_BR => 'Assinante cadastrado com sucesso!',
			),
		),
	);

	public static function getTranslation($status_id)
	{
		if(key_exists($status_id, self::$status))
		{
			if(array_key_exists(Egoi::getLanguage(), self::$status[$status_id]['message']))
			{
				return self::$status[$status_id]['message'][Egoi::getLanguage()];
			}
		}

		return $status_id;
	}

	public static function getType($status_id)
	{
		if(array_key_exists($status_id, self::$status))
		{
            return self::$types[self::$status[$status_id]['type']];
		}

		return $status_id;
	}
}