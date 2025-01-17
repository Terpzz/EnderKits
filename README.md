<p align="center">
    <a href="https://github.com/Terpz710/EnderKits"><img src="https://github.com/Terpz710/EnderKits/blob/main/icon.PNG"></img></a><br>

# Description

A simple kits plugin for Pocketmine-MP. This plugin will allow you to create unlimited kits with easy to use permission and cool down sytsem. Very easy configurable kits.yml.

- Added custom permissions
- PiggyCustomEnchant Support👏
- Added bank notes to the kit(MUST USE MY BANK NOTES PLUGIN CALLED "BankNotesPlus")
  
# Permissions

```
permissions:
  enderkits.kit:
    description: "Enderkits Perm"
    default: true
  enderkits.kits:
    description: "Enderkits Perm"
    default: true
```

# CONFIG

**kits.yml**

```
# Created by Terpz710
# To create a kit, follow this structure:
#
# kit_name:
#   permissions: "enderkits.kit.(kitname)"  # Add the permission node required to access this kit
#   armor:  # Armor items
#     helmet:
#       item: "item_id"  # The item ID for the helmet (e.g., "diamond_helmet")
#       enchantments:  # Enchantments for the helmet
#         enchantment_name: enchantment_level  # (e.g., "protection: 2")
#       name: "Custom Helmet Name"  # Optional custom name
#     chestplate:
#       item: "item_id"
#       enchantments:
#         enchantment_name: enchantment_level
#       name: "Custom Chestplate Name"
#     leggings:
#       item: "item_id"
#       enchantments:
#         enchantment_name: enchantment_level
#       name: "Custom Leggings Name"
#     boots:
#       item: "item_id"
#       enchantments:
#         enchantment_name: enchantment_level
#       name: "Custom Boots Name"
#   items:  # Other items in the kit
#     item_id:
#       enchantments:
#         enchantment_name: enchantment_level
#       quantity: item_quantity
#       name: "Custom Item Name"
#   cooldown: cooldown_in_seconds
#   banknotes:
#     - 1000
#     - 5000
#     - 20000
kits:
  test:
    permissions: "ALL"
    armor:
      helmet:
        item: "diamond_helmet"
        enchantments:
          protection: 2
      chestplate:
        item: "diamond_chestplate"
        enchantments:
          protection: 2
      leggings:
        item: "diamond_leggings"
        enchantments:
          protection: 2
      boots:
        item: "diamond_boots"
        enchantments:
          protection: 2
    items:
      diamond_sword:
        enchantments:
          sharpness: 2
        quantity: 1
      golden_apple:
        quantity: 5
      steak:
        quantity: 32
      strength_potion:
        quantity: 1
    cooldown: 86400
    banknotes:
      - 1000
      - 5000
      - 20000

  starter:
    permissions: "ALL"
    armor:
      helmet:
        item: "iron_helmet"
        enchantments:
          protection: 1
      chestplate:
        item: "iron_chestplate"
        enchantments:
          protection: 1
      leggings:
        item: "iron_leggings"
        enchantments:
          protection: 1
      boots:
        item: "iron_boots"
        enchantments:
          protection: 1
    items:
      stone_sword:
        enchantments:
          sharpness: 1
        quantity: 1
      stone_pickaxe:
        quantity: 1
      bread:
        quantity: 32
      apple:
        quantity: 10
    cooldown: 3600

  vip:
    permissions: "VIP"
    armor:
      helmet:
        item: "chainmail_helmet"
        enchantments:
          protection: 3
      chestplate:
        item: "chainmail_chestplate"
        enchantments:
          protection: 3
      leggings:
        item: "chainmail_leggings"
        enchantments:
          protection: 3
      boots:
        item: "chainmail_boots"
        enchantments:
          protection: 3
    items:
      iron_sword:
        enchantments:
          sharpness: 3
        quantity: 1
      carrot:
        quantity: 8
      chicken:
        quantity: 16
      swiftness_potion:
        quantity: 2
    cooldown: 7200

```

# TODO

- [ ] Make a messages.yml to handle messages.
- [ ] Add an ecomony system.(Semi completed)
- [x] Maybe add custom enchant if pigman decides to update.
- [ ] Add more features to the kit such effects when claimed.(Maybe)
- [x] Add other plugin support.
- [ ] Add UI support(Will make it an off/on)
