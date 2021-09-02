import os

# import config
from dotenv import load_dotenv

# import client
import discord

# import bot
from discord.ext import commands

# load config
load_dotenv(dotenv_path="config/config")


default_intents = discord.Intents.default()
default_intents.members = True
client = discord.Client(intents=default_intents)

# bot prefix
bot = commands.Bot(command_prefix="!")


# client
@client.event
async def on_ready():
    print("Mini Pisces dans les filets mon Capichef o7")


@client.event
async def on_member_join(member):
    dev_channel: discord.TextChannel = client.get_channel(863436295177764875)
    await dev_channel.send(content=f"Hey {member.display_name}, t'as le café ?")


@client.event
async def on_message(message):
    if message.content.lower() == "ping":
        await message.channel.send("pong")

# client run
client.run(os.getenv("token"))


# bot
@bot.event
async def on_ready():
    print("Mini Pisces paré à delete o7")

# bot delete


@bot.command(name='del')
async def delete(ctx, number_of_messages: int):
    messages = await ctx.channel.history(limit=number_of_messages + 1).flatten()

    for each_message in messages:
        await each_message.delete()

# bot run
bot.run(os.getenv("token"))
