<?php

namespace Deimjons\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Articles")
 */
class Article
{
  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;
  /**
   * @ORM\Column(type="string", length=150)
   */
  protected $title;
  /**
   * @ORM\Column(type="text")
   */
  protected $text;
  /**
   * @ORM\Column(type="datetime")
   */
  protected $date;

  /**
   * @return mixed
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param mixed $id
   */
  public function setId($id) {
    $this->id = $id;
  }

  /**
   * @return mixed
   */
  public function getTitle() {
    return $this->title;
  }

  /**
   * @param mixed $title
   */
  public function setTitle($title) {
    $this->title = $title;
  }

  /**
   * @return mixed
   */
  public function getText() {
    return $this->text;
  }

  /**
   * @param mixed $text
   */
  public function setText($text) {
    $this->text = $text;
  }

  /**
   * @return mixed
   */
  public function getDate() {
    return $this->date;
  }

  /**
   * @param mixed $date
   */
  public function setDate($date) {
    $this->date = $date;
  }

}