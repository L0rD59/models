<?php

namespace LIG\Model\Contact;

interface ContacteableInterface
{
    /**
     * Gets the contacts of prospect.
     *
     * @return \Traversable
     */
    public function getContacts();

    /**
     * Add a contact to the prospect.
     *
     * @param ContactInterface $contact
     *
     * @return self
     */
    public function addContact(ContactInterface $contact);

    /**
     * Remove a contact of prospect.
     *
     * @param ContactInterface $contact
     *
     * @return self
     */
    public function removeContact(ContactInterface $contact);
}